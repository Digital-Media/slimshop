<?php

/**
 * The class Login implements the login to OnlineShop.
 *
 * On success the variable $_SESSION[LOGGEDIN] is filled with a special hash.
 * User credentials are validated against the table onlineshop.user
 *
 * @author  Martin Harrer <martin.harrer@fh-hagenberg.at>
 * @package SlimShop
 * @version 1.0.0
 */
final class Login extends DBNormForm
{

    const EMAIL = "email";
    const PASSWORD = "password";
    /**
     * Validates the user input
     *
     * email and password are required fields.
     * The combination of email + password is checked against database in @see Login::authenitcateUser()
     * Error messages are stored in the array $errorMessages[].
     *
     * @return bool true, if $errorMessages is empty, else false
     */
    public function isValid(): bool
    {
        if ($this->isEmptyPostField(self::EMAIL)) {
            $this->errorMessages[self::EMAIL] = "Please enter your email.";
        }
        if (!$this->isEmptyPostField(self::EMAIL) && !Utilities::isEmail($_POST[self::EMAIL])) {
            $this->errorMessages[self::EMAIL] = "Please enter a valid email.";
        }
        if ($this->isEmptyPostField(self::PASSWORD)) {
            $this->errorMessages[self::PASSWORD] = "Please enter your password.";
        }
        if ((count($this->errorMessages) === 0)) {
            if (!$this->authenticateUser()) {
                $this->errorMessages[self::PASSWORD] = "Invalid user name or password or account has not been activated yet.";
            }
        }
        $_SESSION['errors']=$this->errorMessages;
        return (count($this->errorMessages) === 0);
    }

    /**
     * Process the user input, sent with a POST request
     *
     * If a user called a page, that is protected by login, he will be redirected back to the page he requested.
     * If he directly requested the login page he is redirected to index.php
     * A page protected by login has to store its name in $_SESSION['redirect'] to make this redirect possible.
     *
     * @see View::redirect() for this.
     */
    public function business(): void
    {
        isset($_SESSION['redirect']) ? $redirect= $_SESSION['redirect'] : $redirect='indexMain.twig.html';
    }

    /**
     * Validates email and password against onlineshop.user
     *
     * After a successful login the session_id is regenerated to make session hijacking more difficult.
     * session_regenerate_id() is used for that.
     * After that the corresponding session_ids in onlineshop.cart have to be replaced with the new one.
     *
     * @return bool true, if email+password match a row in onlineshop.user, else false.
     * @throws DatabaseException
     */
    private function authenticateUser(): bool
    {
        $query = <<<SQL
                 SELECT iduser, first_name, last_name, password 
                 FROM user 
                 WHERE email = :email 
                 AND active IS NULL
SQL;
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(':email' => $_POST[self::EMAIL]));
        $rows = $stmt->fetchAll();
        if (count($rows) === 1 && password_verify($_POST[self::PASSWORD], $rows[0]['password'])) {
            $old_session_id = session_id();
            session_regenerate_id();
            $this->updateCart($old_session_id, session_id());
            $_SESSION['iduser']=$rows[0]['iduser'];
            $_SESSION['isloggedin'] = Utilities::generateLoginHash();
            $_SESSION['first_name']=$rows[0]['first_name'];
            $_SESSION['last_name']=$rows[0]['last_name'];
            return true;
        } else {
            return false;
        }

    }

    /**
     * Replaces the session_ids in onlineshop.cart after the session has been regenerated after a successful login.
     *
     * @return bool true, wenn das update gut gegangen ist. false, wenn das nicht der Fall ist.
     * @throws DatabaseException
     */
    private function updateCart($old_session_id, $new_session_id)
    {
        $query = <<<SQL
                 UPDATE  cart 
                 SET session_id = :new_session_id
                 WHERE session_id = :old_session_id
SQL;
        $stmt = $this->db->prepare($query);
        $params = array(':new_session_id' => $new_session_id, ':old_session_id' => $old_session_id);
        return $stmt->execute($params);
    }
}
