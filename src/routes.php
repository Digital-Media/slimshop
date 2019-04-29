<?php

use Slim\Http\Request;
use Slim\Http\Response;

/*
 * This route loads the landing page
 */
$app->get('/', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    return $this->view->render($response, 'indexMain.html.twig', $args);
});

/*
 * /logout ist only valid if a user is logged in.
 */
$app->get('/logout', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/logout' route");
    $_SESSION = [];
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), "", time() - 86400, "/");
    }
    session_destroy();
    return $this->view->render($response, 'indexMain.html.twig', $args);
});

/*
 * /dbdemo demonstrates how form data are validated and processed
 * with the normform MVC pattern.
 */
$app->get('/dbdemo', function (Request $request, Response $response, array $args) {
    // uncomment following lines to demonstrate error_handling
    // PHP Warning is visible in browser with display_errors=1
    //$x=1/0;
    // PHP Notice visible in browser with display_errors=1
    //$this->hugo;
    // HTTP Status: 500 Page not Working, only visible in /var/log/apache2/error.log with log_errors=On
    //§this->hugo;
    $this->logger->info("Slim-Skeleton '/dbdemo' route");
    $dbdemo = new DBDemo($this->db, $request, $response, $this->view);
    $args['pageArray'] = $dbdemo->fillpageArray();
    return $this->view->render($response, 'dbdemoMain.html.twig', $args);
});
/*
 * returns result view if business doesn't throw exception
 * returns a error view if isValid() returns an error
 */
$app->post('/dbdemo', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/dbdemo' route");
    $dbdemo = new DBdemo($this->db, $request, $response, $this->view);
    if ($dbdemo->isValid()) {
        return $dbdemo->business();
    }
    return $dbdemo->errorView;
});

/*
 * /register.
 */
$app->get('/register', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/register' route");
    return $this->view->render($response, 'registerMain.html.twig', $args);
});

$app->post('/add_user', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/add_user' route");
    $register = new Register($this->db, $request, $response, $this->view);
    if ($register->isValid()) {
        return $register->business();
    }
    return $register->errorView;
});

/*
 * /dbslimdemo demonstrates how form data are validated and processed
 * with the a MVC pattern. In this case form data are sent via AJAX.
 * We no longer use NormForm but Slim Controllers and Middleware
 * but keep the normform pattern in mind to know what's going on.
 */
$app->get('/dbslimdemo', 'DBSlimDemo:index');
$app->post('/dbslimdemo', 'DBSlimDemo:business');

/*
 * /dbajaxdemo demonstrates how form data are validated and processed
 * with the a MVC pattern. In this case form data are sent via AJAX.
 * We no longer use NormForm but Slim Controllers and Middleware
 * but keep the normform pattern in mind to know what's going on.
 */
$app->get('/dbajaxdemo', 'DBAjaxDemo:index');
$app->post('/dbajaxdemo', 'DBAjaxDemo:business');



/*
 * /product.
 */
$app->get('/product', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/product' route");
    return $this->view->render($response, 'productMain.html.twig', $args);
});

/*
 * /mycart.
 */
$app->get('/mycart', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/mycart' route");
    return $this->view->render($response, 'mycartMain.html.twig', $args);
});

/*
 * /checkout.
 */
$app->get('/checkout', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/checkout' route");
    return $this->view->render($response, 'checkoutMain.html.twig', $args);
});

/*
 * /search.
 */
$app->get('/search', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/search' route");
    return $this->view->render($response, 'searchMain.html.twig', $args);
});

/*
 * /pentest.
 */
$app->get('/pentest', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/pentest' route");
    return $this->view->render($response, 'pentestMain.html.twig', $args);
});

/*
 * /esearchdemo.
 */
$app->get('/esearchdemo', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/esearchdemo' route");
    return $this->view->render($response, 'esearchdemoMain.html.twig', $args);
});

/*
 * /redisdemo.
 */
$app->get('/redisdemo', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/redisdemo' route");
    return $this->view->render($response, 'redisdemoMain.html.twig', $args);
});


/*
 * This routes implement the sorting of the products on the page Home
 * If you click a item in the header of the product table the products
 * are sorted by pid, pname or price
 * hier könnte man path_for einsetzen ?!
 */
$app->get('/sort/{sort}', function (Request $request, Response $response, array $args) {
    // Sample log message
    $sort = (string)$args['sort'];
    $this->logger->info("Slim-Skeleton '/sort/$sort' route");
    // Render index view
    return $this->view->render($response, 'indexMain.html.twig', $args);
});

$app->post('/search', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/search' route");
    // Render index view
    return $this->view->render($response, 'searchMain.html.twig', $args);
});

$app->post('/oldsearch', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/oldsearch' route");
    // Render index view
    return $this->view->render($response, 'indexMain.html.twig', $args);
});



$app->post('/add_product', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/add_product' route");
    return $this->view->render($response, 'productMain.html.twig', $args);
});

/*
 * Routes for ElasticSearch demo
 */
$app->post('/view_all', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/view_all' route");
    // Render index view
    return $this->view->render($response, 'esearchdemoMain.html.twig', $args);
});

$app->post('/like', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/like' route");
    // Render index view
    return $this->view->render($response, 'esearchdemoMain.html.twig', $args);
});

$app->post('/match', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/match' route");
    // Render index view
    return $this->view->render($response, 'esearchdemoMain.html.twig', $args);
});

$app->post('/copy_to', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/copy_to' route");
    // Render index view
    return $this->view->render($response, 'esearchdemoMain.html.twig', $args);
});

$app->post('/no_cursor', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/no_cursor' route");
    // Render index view
    return $this->view->render($response, 'esearchdemoMain.html.twig', $args);
});

$app->post('/paging', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/paging' route");
    // Render index view
    return $this->view->render($response, 'esearchdemoMain.html.twig', $args);
});

/*
 * End Routes for ElasticSearch demo
 */

$app->post('/redisdemo', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/redisdemo' route");
    // Render index view
    return $this->view->render($response, 'redisdemoMain.html.twig', $args);
});

/*
 * Routes for pentesting
 */
$app->post('/pentestlogin', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/pentestlogin' route");
    // Render index view
    return $this->view->render($response, 'pentestMain.html.twig', $args);
});

$app->post('/pentestform', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/pentestfrom' route");
    // Render index view
    return $this->view->render($response, 'pentestMain.html.twig', $args);
});

/*
 * End of pentest routes
 */
