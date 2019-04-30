<?php

class Controller
{
    /**
     * An array containing all error messages being set by isValid().
     *
     * @var array
     */
    protected $errorMessages;

    /**
     * A string containing a status message being set by business().
     *
     * @var array
     */
    protected $statusMessage;

    public function __construct($container)
    {
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

    /*
     * Returns all values filled by user in form input fields
     * Done bei class View in normform
     * normform View has been replaced bei slim/View, that doesn't support returning params on its own
     */
    protected function returnInputParams($request): array
    {
        $params = $request->getParams();
        foreach ($params as $param => $value) {
            $args[$param] = $value;

        }
        return $args;
    }
}
