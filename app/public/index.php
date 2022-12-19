<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();
$enviroment = $_ENV["ENVIROMENT"];

if ($enviroment === "dev") {
    // Should be set to 0 in production
    error_reporting(E_ALL);

    // Should be set to '0' in production
    ini_set('display_errors', '1');
} else {
    // Should be set to 0 in production
    error_reporting(0);

    // Should be set to '0' in production
    ini_set('display_errors', '0');
}



use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;




$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello World!");
    return $response;
});

$app->run();





// $app = AppFactory::create();

// $app->get('/', function (Request $request, Response $response, array $args) {
//     //$name = $args['name'];
//     $response->getBody()->write("Hello World!");
//     return $response;
// });


// $containerBuilder = new ContainerBuilder();

// // Add DI container definitions
// $containerBuilder->addDefinitions(__DIR__ . '/container.php');

// // Create DI container instance
// $container = $containerBuilder->build();

// // Create Slim App instance
// $app = $container->get(App::class);

// // Register routes
// (require __DIR__ . '/routes.php')($app);

// // Register middleware
// (require __DIR__ . '/middleware.php')($app);

// return $app;
