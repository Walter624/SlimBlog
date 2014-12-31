<?php

use Slim\Slim;

require __DIR__ . '/vendor/autoload.php';

define('PROJECT_ROOT', __DIR__);

// Set app with configs
$app = new Slim(require_once __DIR__ . '/src/SlimBlog/Resources/config/config.php');

// Set DB
$app->container->set('db', new \PDO(
    $app->config('db.driver') . ':db.name=' .
        $app->config('db.name') . ';host=' . $app->config('db.host') . ';port=' . $app->config('db.port'),
    $app->config('db.user'),
    $app->config('db.password')
));

// Initialize Routes
foreach (glob(__DIR__ . '/src/SlimBlog/Resources/routes/*.php') as $router) {
    require_once $router;
}

// Run
$app->run();
