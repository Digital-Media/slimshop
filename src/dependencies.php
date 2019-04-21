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

// view twig renderer
$container["view"] = function ($c) {
    $viewSettings = $c->get("settings")["view"];
    $view = new Twig($viewSettings["templates"], [
        "cache"       => $viewSettings["cache"],
        "auto_reload" => $viewSettings["auto_reload"]
    ]);
    $router = $c->get("router");
    $uri = Uri::createFromEnvironment(new Environment($_SERVER));
    $view->addExtension(new TwigExtension($router, $uri));
    $view->getEnvironment()->addGlobal("_server", $_SERVER);
    if (isset($_SESSION)) {
        $view->getEnvironment()->addGlobal("_session", $_SESSION);
    }
    return $view;
};

// database connection PDO MySQL
$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
        $db['user'], $db['pass'], $db['options']);
    return $pdo;
};

$container['DBAjaxDemo'] = function ($container) {
    return new DBAjaxDemo($container);
};
