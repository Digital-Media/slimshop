<?php

/*
 * The class Register implements a registration of a user at onlineshop.
 *
 * If user credentials are valid, they are stored in the table onlineshop.user.
 *
 * @author Martin Harrer <martin.harrer@fh-hagenberg.at>
 * @package OnlineShop
 * @version 2.0.2
 */
final class Register extends DBNormForm
{
    /**
     * Constants for a HTML attribute in <input name='ptype' id='ptype' ... >, <label for='ptype' ... >
     * --> $_POST[self::PTYPE]
     */
    const FIRSTNAME = "firstname";
    const LASTNAME = "lastname";
    const NICKNAME = "nickname";
    const PHONE = "phone";
    const MOBILE = "mobile";
    const FAX = "fax";
    const EMAIL = "email";
    const PASSWORD = "password";
    const PASSWORD_REPEAT = "password_repeat";

    public $errorView = null;

    /**
     * Validates the user input
     *
     * email is validated with a regex. You can use Utilities::isEmail() to do so.
     * Additionally email is checked for uniqueness against onlineshop.user.
     * password is validated with a regex. You can use Utilitie::isPassword() to do so.
     * At least one of the fields phone, mobile and fax is required.
     * If filled they are checked with a regex. You can use Utilities::isPhone() to do so.
     * All other fields are required. You can use AbstractNormform::isEmptyPostField() for validation.
     * Error messages are strored in the array $errorMessages[].
     *
     * Abstract methods of the class AbstractNormform have to be implemented in the derived class.
     *
     * @return mixed null, if $errorMessages is filled, else the View to render
     */
    public function isValid()
    {
        //%%register/isValid
        if ($this->isEmptyPostField(self::FIRSTNAME)) {
            $this->errorMessages[self::FIRSTNAME] = "Please enter a firstname.";
        }
        if ($this->isEmptyPostField(self::LASTNAME)) {
            $this->errorMessages[self::LASTNAME] = "Please enter a lastname.";
        }
        if ($this->isEmptyPostField(self::NICKNAME)) {
            $this->errorMessages[self::NICKNAME] = "Please enter a nickname.";
        }
        if ($this->isEmptyPostField(self::EMAIL)) {
            $this->errorMessages[self::EMAIL] = "Please enter your email address.";
        }
        if (!$this->isEmptyPostField(self::EMAIL) && !Utilities::isEmail($_POST[self::EMAIL])) {
            $this->errorMessages[self::EMAIL] = "Please enter a valid email address";
        }
        if (!$this->isEmptyPostField(self::EMAIL) && !$this->isUniqueEmail()) {
            $this->errorMessages[self::EMAIL] = "A user with this e-mail address is already registered. Please choose another one.";
        }
        if ($this->isEmptyPostField(self::PASSWORD)) {
            $this->errorMessages[self::PASSWORD] = "Please enter a password.";
        }
        if (!$this->isEmptyPostField(self::PASSWORD) && !Utilities::isPassword($_POST[self::PASSWORD], 2, 8)) {
            $this->errorMessages[self::PASSWORD] = "Please enter a valid Password: Use only letters, numbers, and the underscore. Must be between 5 and 20 characters long.";
        }
        if ($this->isEmptyPostField(self::PASSWORD_REPEAT)) {
            $this->errorMessages[self::PASSWORD_REPEAT] = "Please repeat your password.";
        }
        if (!$this->isEmptyPostField(self::PASSWORD_REPEAT) && strcmp($_POST[self::PASSWORD], $_POST[self::PASSWORD_REPEAT]) != 0) {
            $this->errorMessages[self::PASSWORD_REPEAT] = "Password re-type does not match.";
        }
        if ($this->isEmptyPostField(self::PHONE) && $this->isEmptyPostField(self::MOBILE) && $this->isEmptyPostField(self::FAX)) {
            $this->errorMessages[self::PHONE] = 'Please enter at least one telefon number';
        }
        if (!$this->isEmptyPostField(self::PHONE) && !Utilities::isPhone($_POST[self::PHONE])) {
            $this->errorMessages[self::PHONE] = 'Please enter phone number in a valid format';
        }
        if (!$this->isEmptyPostField(self::MOBILE) && !Utilities::isPhone($_POST[self::MOBILE])) {
            $this->errorMessages[self::MOBILE] = 'Please enter mobile number in a valid format';
        }
        if (!$this->isEmptyPostField(self::FAX) && !Utilities::isPhone($_POST[self::FAX])) {
            $this->errorMessages[self::FAX] = 'Please enter fax number in a valid format';
        }
        if (count($this->errorMessages) !== 0) {
            $args = array( 'errorMessages' => $this->errorMessages,
                'firstname' => $this->request->getParam('firstname'),
                'lastname' => $this->request->getParam('lastname'),
                'nickname' => $this->request->getParam('nickname'),
                'phone' => $this->request->getParam('phone'),
                'mobile' => $this->request->getParam('mobile'),
                'fax' => $this->request->getParam('fax'),
                'email' => $this->request->getParam('email'),
            );
            $this->errorView = $this->view->render($this->response, 'registerMain.html.twig', $args);
        } else {
            return true;
        }
    }

    /**
     * Process the user input, sent with a POST request
     *
     * Writes the data with addUser() into table onlineshop.user.
     * On success the user is redirected to '/'.
     *
     * @throws DatabaseException
     */
    public function business()
    {
        $this->addUser();
        //%%register/business
        return $this->response->withRedirect('/');
    }


        /**
     * email of the POST-Array is checked for uniqueness against the table onlineshop.user.
     *
     * @return bool true, if email doesn't exist.
     *              false, if email exists.
     * @throws DatabaseException
     */
    private function isUniqueEmail(): bool
    {
        //%%register/isUniqueEmail
        $query = <<<SQL
                 SELECT iduser FROM user WHERE email=:email
SQL;
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email' , $_POST[self::EMAIL], PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        if (count($rows) === 0) {
            return true;
        } else {
            return false;
        }
        //##%%
        return true;
        //#%#%
    }

    /**
     * Stores the data in the table onlineshop.user
     *
     * The field active stores a MD5-Hash to determine, that a two-phase authentication has not been finished yet.
     * If active is set to NULL, when clicking a link with this hash sent via email, the user can log in.
     *
     * @see login.php
     * role has a default value (user) and can be left empty, if you allow only normal users to register via this form.
     * date_registered can be omitted or filled with NOW(), to store the current timestamp.
     * phone, mobile und fax are not required and can be null.
     * All other fields are directly stored to the table onlineshop.user.
     *
     * To test, if a login with login.php works with the current data,
     * set onlineshop.user.active to null with PHPMyAdmin
     *
     * @throws DatabaseException
     */
    private function addUser(): void
    {
        //%%register/addUser
        $password = password_hash($_POST[self::PASSWORD], PASSWORD_DEFAULT);
        $active = md5(uniqid(rand(), true));
        $query = <<<SQL
                 INSERT INTO user 
                 SET first_name = :first_name,
                     last_name = :last_name,
                     nick_name = :nick_name,
                     email = :email,
                     password = :password,
                     active = :active,
                     role = :role,
                     date_registered = NOW(),
                     phone = :phone,
                     mobile = :mobile,
                     fax = :fax
SQL;
        $stmt = $this->db->prepare($query);
        // Es gibt kein PDO::PARAM_FLOAT/DECIMAL/DATE, PDO::PARAM_INT ist nur relevant für PK/FK oder wenn die Datenbank keine Implizite Typkonvertierung entsprechend der Tabellendefinition vornimmt
        // Man kann also bindValue weglassen, weil der default Type in $stmt->execute() PDO::PARAM_STR ist
        // --> executeStmt($params)
        // TODO null-Werte in DB schreiben?! statt leerer Strings!!!
        $stmt->bindValue(':first_name' , Utilities::sanitizeFilter($_POST[self::FIRSTNAME]), PDO::PARAM_STR);
        $stmt->bindValue(':last_name' , Utilities::sanitizeFilter($_POST[self::LASTNAME]), PDO::PARAM_STR);
        $stmt->bindValue(':nick_name' , Utilities::sanitizeFilter($_POST[self::NICKNAME]), PDO::PARAM_STR);
        $stmt->bindValue(':email' , Utilities::sanitizeFilter($_POST[self::EMAIL]), PDO::PARAM_STR);
        $stmt->bindValue(':password' , $password, PDO::PARAM_STR);
        $stmt->bindValue(':active' , $active, PDO::PARAM_STR);
        $stmt->bindValue(':role' , 'user', PDO::PARAM_STR);
        $stmt->bindValue(':phone' , Utilities::sanitizeFilter($_POST[self::PHONE]), PDO::PARAM_STR);
        $stmt->bindValue(':mobile' , Utilities::sanitizeFilter($_POST[self::MOBILE]), PDO::PARAM_STR);
        $stmt->bindValue(':fax' , Utilities::sanitizeFilter($_POST[self::FAX]), PDO::PARAM_STR);
        $stmt->execute();
    }
}
