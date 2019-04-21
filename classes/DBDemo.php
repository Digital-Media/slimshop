<?php

/**
 * Class DBDEmo implements a demo page for the class AbstractNormForm combined with the class DBAccess of OnlineShop
 *
 * This class is initialized by htdocs/dbdemo.php, is derived from the class AbstractNormForm and uses TWIG templates.
 * Additionally the class DBAccess is used for database access.
 * DBAccess replaces the class FileAccess of the project PHPintro.
 * Due to the usage of PDO Prepared Statements no further steps are necessary to avoid SQL Injection in this use case.
 * XSS is prevented by the TWIG template engine, that escapes variables sent to a template automatically.
 *
 * This page lists the content of onlineshop.product_category and adds additional categories.
 *
 * Class DBAccess is final, because it makes no sense to derive a class from it.
 *
 * @author  Martin Harrer <martin.harrer@fh-hagenberg.at>
 * @package onlineshop
 * @version 2018
 */
final class DBDemo extends DBNormForm
{
    /**
     * Constant for a HTML attribute in <input name='ptype' id='ptype' ... >, <label for='ptype' ... >
     * --> $_POST[self::PTYPE]
     */
    const PTYPE = 'ptype';

    public $errorView = null;

    /**
     * Validates the user input
     *
     * The product category ptype is tested if it is empty.
     * Additionally it is validated with a regex given by Utilities::isSingleWord().
     * Due to "use Utilities" at the begin of this class, $this->isSingleWord() is also possible.
     * The trait is part of the current class then.
     * Error messages are written to the array $errorMessages[].
     *
     * Abstract methods of the class AbstractNormform have to be implemented in the derived class.
     *
     * @return bool true, if $errorMessages is empty, else false
     */
    public function isValid()
    {
        if ($this->isEmptyPostField(self::PTYPE)) {
            $this->errorMessages[self::PTYPE] = "Please enter a Product Category.";
        }
        if (isset($_POST[self::PTYPE]) && !Utilities::isSingleWord($_POST[self::PTYPE])) {
            $this->errorMessages[self::PTYPE] = "Please enter a Product Category as a Single Word.";
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
            $this->errorView = $this->view->render($this->response, 'dbdemoMain.html.twig', $args);
        } else {
            return true;
        }
    }

    /**
     * Process the user input, sent with a POST request
     *
     * Shop::addPType() stores a new category in onlineshop.product_category.
     * If this works $this->statusMsg is set and displayed in the template.
     * All categories are read from onlineshop.product_category and displayed in the template.
     *
     * Abstract methods of the class AbstractNormform have to be implemented in the derived class.
     *
     * @throws DatabaseException is thrown by all methods of $this->dbAccess and not treated here.
     *         The exception is treated in the try-catch block of the php script, that initializes this class.
     */
    public function business()
    {
        $this->addPType();
        $this->statusMessage = "Product Category added";
        $args = ["statusMessage" => $this->statusMessage,
                 "pageArray" => $this->fillPageArray(),
            ];
        return $this->view->render($this->response, 'dbdemoMain.html.twig', $args);
    }

    /**
     * Returns an array to display all entries of onlineshop.product_category on the current page.
     *
     * @return array $result Result set of database query.
     * @throws DatabaseException is thrown by all methods of $this->dbAccess and not treated here.
     *         The exception is treated in the try-catch block of the php script, that initializes this class.
     */
    public function fillPageArray(): array
    {
        $query = <<<SQL
                 SELECT idproduct_category, product_category_name
                 FROM product_category
SQL;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }


    /**
     * Writes validated user input to the table onlineshop.product_category.
     *
     * @throws DatabaseException is thrown by all methods of $this->dbAccess and not treated here.
     *         The exception is treated in the try-catch block of the php script, that initializes this class.
     */
    private function addPType(): void
    {
        $query = <<<SQL
                 INSERT INTO product_category 
                 SET product_category_name = :ptype
SQL;
        $stmt = $this->db->prepare($query);
        // The next two lines do the same due to "use Utilities" at the begin of the class declaration
        // $params = array(':ptype' => Utilities::sanitizeFilter($_POST[self::PTYPE]));
        $params = array(':ptype' => $_POST[self::PTYPE]);
        $stmt->execute($params);
    }
}
