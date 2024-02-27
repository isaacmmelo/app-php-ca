<?php
/** Variavles type check = on*/
declare(strict_types=1);

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: grey;">
    <?php 


    require_once dirname(__DIR__) . '/docker/composer/vendor/autoload.php';

    /** Application configuration */
    use SigmagApp\Infrastructure\Application;
    //$app = new Application();

    /* // set up persistence
    $store = $app->setupPersistence(__DIR__ . '/../db');

    // set up templates processing engine
    $templatesProcessor = $app->setupTemplatesProcessor(__DIR__ . '/../templates');

    // set up response emitter
    $responseEmitter = $app->setupResponseEmitter();

    // set up DI container
    $container = $app->setupContainer($templatesProcessor, $responseEmitter, $store);

    // set up route dispatcher
    $routes = $app->setupRouting();

    // set up request handling middleware
    $requestHandler = $app->setupMiddleware($routes, $container);

    // run the application
    $app->run($requestHandler, $container); */


?>    
</body>
</html>