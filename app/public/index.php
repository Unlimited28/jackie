<?php

// Front Controller

// 1. Bootstrap the application
require __DIR__ . '/../bootstrap.php';

// 2. Autoloading (a real app would use Composer)
require __DIR__ . '/../core/Router.php';
require __DIR__ . '/../core/Controller.php';
require __DIR__ . '/../core/View.php';
require __DIR__ . '/../controllers/PublicController.php';
require __DIR__ . '/../controllers/DashboardController.php'; // This one might be redundant now
require __DIR__ . '/../controllers/AmbassadorController.php';
require __DIR__ . '/../controllers/PresidentController.php';
require __DIR__ . '/../controllers/SuperAdminController.php';

use App\Core\Router;

// 3. Instantiate the router
$router = new Router();

// 4. Load the routes
require __DIR__ . '/../routes/web.php';

// 5. Dispatch the request
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->dispatch($uri, $method);
