<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

spl_autoload_register(function ($classname) {
    require ( "../app/classes/" . $classname . ".php");
});

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/constants/constants.php';
session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);
$container = $app->getContainer();

$container['db'] = function ($c) {
    $pdo = new DbConnect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $db = $pdo->connect();
    return $db;
};
// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register middleware
require __DIR__ . '/../src/middleware.php';

// Register routes
require __DIR__ . '/../src/routes.php';

// Run app
$app->run();
