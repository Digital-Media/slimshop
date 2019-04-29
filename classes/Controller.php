<?php

class Controller
{
    /**
     * An array containing all error messages being set by isValid().
     *
     * @var array
     */
    protected $errorMessages;

    public function __construct($container) {
        $this->db = $container->db;
        $this->view = $container->view;
        $this->logger = $container->logger;
    }

    /**
     * Convenience method to check if a form field is empty, thus contains only an empty string. This is preferred to
     * PHP's own empty() method which also defines inputs such as "0" as empty.
     * @param string $index The index in the super global $_POST array.
     * @return bool Returns true if the form field is empty, otherwise false.
     */
    protected function isEmptyPostField(string $index, $request): bool
    {
        return (!($request->getParam($index)) || strlen(trim($request->getParam($index))) === 0);
    }

}