<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\UidProcessor;
use Slim\Container;
use Slim\Http\Environment;
use Slim\Http\Uri;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;


// DIC configuration

$container = $app->getContainer();

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

$container['DBAjaxDemo'] = function ($container) {
    return new DBAjaxDemo($container);
};

$container['DBSlimDemo'] = function ($container) {
    return new DBSlimDemo($container);
};
/*
$container['login'] = function ($container) {
    return new Login($container);
};
*/

// view twig renderer
$container["view"] = function ($container) {
    $viewSettings = $container->get("settings")["view"];
    $view = new Twig($viewSettings["templates"], [
        "cache"       => $viewSettings["cache"],
        "auto_reload" => $viewSettings["auto_reload"]
    ]);
    $router = $container->get("router");
    $uri = Uri::createFromEnvironment(new Environment($_SERVER));
    $view->addExtension(new TwigExtension($router, $uri));
    // No longer necessary. Replaced by routes
    //$view->getEnvironment()->addGlobal("_server", $_SERVER);
    /*
     * No longer necessary. Replaced by Middleware, that uses sessions.
     * Twig now is more secure, cause $_SERVER and $_SESSION are not registered.
    if (isset($_SESSION)) {
        $view->getEnvironment()->addGlobal("_session", $_SESSION);
    }
    */
    return $view;
};

// database connection PDO MySQL
$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
        $db['user'], $db['pass'], $db['options']);
    return $pdo;
};
