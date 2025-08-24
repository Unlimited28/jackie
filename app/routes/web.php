<?php

/** @var App\Core\Router $router */

$router->get('/', ['PublicController', 'home']);
$router->get('/login', ['PublicController', 'showLogin']);
$router->get('/register', ['PublicController', 'showRegister']);

// POST routes for form submissions will be added later
// $router->post('/login', ['AuthController', 'login']);
// $router->post('/register', ['AuthController', 'register']);
