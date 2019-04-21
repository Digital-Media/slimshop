<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

abstract class DBNormForm {

    /**
     * Properties for the class DBNormForm
     *
     * @var string $db Database handler
     */
    protected $db;

    /**
     * An array containing all error messages being set by isValid().
     *
     * @var array
     */
    protected $errorMessages;

    /**
     * An optional status message that can be set in business() when processing data was successful.
     *
     * @var string
     */
    protected $statusMessage;

    /**
     * Abstract method used to validate the form input. Must be implemented in the subclass.
     * @return bool Returns true if validation was successful, otherwise false.
     */
    abstract protected function isValid();

    /**
     * Abstract method for processing the validated form input (a.k.a. business logic). Must be implemented in the
     * subclass.
     */
    abstract protected function business();

    /**
     * Creates a new instance for a norm form object and initializes all necessary fields. A View object is used to
     * initially define how and where output is displayed via the template engine and supply parameters to the template.
     * The template engine itself is also set up, two optional parameters allow setting the template paths.
     * @param $db Holds database handler to access MySQL/MariaDB.
     * @param Request $request Holds the HTTP Request Object provided by Slim.
     * @param Response $response Holds the HTTP Response Object provided by Slim.
     * @param Twig $view Holds the initial @View object used for displaying the form.
     */
    public function __construct($db, Request $request, Response $response, Twig $view) {
        $this->db = $db;
        $this->request = $request;
        $this->response = $response;
        $this->view = $view;
    }

    /**
     * Convenience method to check if a form field is empty, thus contains only an empty string. This is preferred to
     * PHP's own empty() method which also defines inputs such as "0" as empty.
     * @param string $index The index in the super global $_POST array.
     * @return bool Returns true if the form field is empty, otherwise false.
     */
    protected function isEmptyPostField(string $index): bool
    {
        return (!($this->request->getParam($index)) || strlen(trim($this->request->getParam($index))) === 0);
    }

}
