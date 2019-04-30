 <?php
return [
    "settings" => [
        "displayErrorDetails" => true, // set to false in production
        "addContentLengthHeader" => false, // Allow the web server to send the content-length header

        // Renderer settings
        "renderer" => [
            "template_path" => __DIR__ . "/../templates/",
        ],

        // Monolog settings
        "logger" => [
            "name" => "slim-app",
            "path" => isset($_ENV['docker']) ? "php://stdout" : __DIR__ . "/../logs/app.log",
            "level" => \Monolog\Logger::DEBUG,
        ],

        "redislogger" => [
            "name" => "slim-app-redis",
            "host" => "localhost",
            "port" => 6379,
            "password" => "geheim",
            "level" => \Monolog\Logger::DEBUG,
        ],

        // Config for TWIG templates
        "view"                => [
            "templates"   => "../templates",
            "cache"       => "../templates_c",
            "auto_reload" => true
        ],

        // Database connection
        "db" => [
            "host" => "localhost",
            "user" => "onlineshop",
            "pass" => "geheim",
            "dbname" => "onlineshop",
            "options" => [
                // A warning is given for persistent connections in case of a interrupted database connection.
                // This warning is shown on the web page if error_reporting=E_ALL is set in php.ini
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' COLLATE 'utf8_general_ci'",
                PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
            ]
        ]
    ],
];
