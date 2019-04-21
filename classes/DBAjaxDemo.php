<?php

/**
 * Class DBAjaxDemo implements a demo page for accessing MariaDB with PDO
 * and uses Slim Controllers and Middleware to implement a MVC pattern.
 *
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
final class DBAjaxDemo extends Controller
{
    /**
     * Constant for a HTML attribute in <input name='ptype' id='ptype' ... >, <label for='ptype' ... >
     * --> $_POST[self::PTYPE]
     */
    const PTYPE = 'ptype';

    /*
     * @return the initial view after a GET request for /dbajaxdemo
     */
    public function index ($request, $response) {
        $this->logger->info("Slim-Skeleton '/dbajaxdemo' route");
        $args['pageArray'] = $this->fillpageArray();
        return $this->view->render($response, 'dbajaxdemoMain.html.twig', $args);
    }
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
    private function isValid($request, $response): bool
    {
        if (!Utilities::isSingleWord($request->getParam(self::PTYPE))) {
            $this->errorMessages[self::PTYPE] = "Please enter a Product Category as a Single Word.";
        }
        if ((count($this->errorMessages) === 0)) {
            return true;
        } else {
            $this->errorMessages['errorMessages'] = count($this->errorMessages);
            $json = json_encode($this->errorMessages, JSON_UNESCAPED_SLASHES);
            echo $json;
            die();
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
    public function business($request, $response)
    {
        if ($this->isValid($request, $response)) {
            $this->addPType();
            echo '{"statusMessage" : "Product Category added", "aid" : "1"}';
            die();
        }
    }

    /**
     * Returns an array to display all entries of onlineshop.product_category on the current page.
     *
     * @return array $result Result set of database query.
     * @throws DatabaseException is thrown by all methods of $this->dbAccess and not treated here.
     *         The exception is treated in the try-catch block of the php script, that initializes this class.
     */
    private function fillPageArray(): array
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
        $params = array(':ptype' => $_POST[self::PTYPE]);
        $stmt->execute($params);
    }
}
