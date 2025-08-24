<?php

/** @var App\Core\Router $router */

// Public Routes
$router->get('/', ['PublicController', 'home']);
$router->get('/about', ['PublicController', 'about']);
$router->get('/blog', ['PublicController', 'blog']);
$router->get('/blog/post', ['PublicController', 'blogPost']);
$router->get('/gallery', ['PublicController', 'gallery']);
$router->get('/contact', ['PublicController', 'contact']);
$router->get('/support', ['PublicController', 'support']);
$router->get('/login', ['PublicController', 'showLogin']);
$router->get('/register', ['PublicController', 'showRegister']);

// Ambassador Routes
$router->get('/ambassador', ['AmbassadorController', 'dashboard']);
$router->get('/ambassador/exams', ['AmbassadorController', 'exams']);
$router->get('/ambassador/exams/take', ['AmbassadorController', 'examTake']);
$router->get('/ambassador/results', ['AmbassadorController', 'results']);
$router->get('/ambassador/notifications', ['AmbassadorController', 'notifications']);
$router->get('/ambassador/profile', ['AmbassadorController', 'profile']);
$router->get('/ambassador/support', ['AmbassadorController', 'support']);

// President Routes
$router->get('/president', ['PresidentController', 'dashboard']);
$router->get('/president/ambassadors', ['PresidentController', 'ambassadors']);
$router->get('/president/exam-approvals', ['PresidentController', 'examApprovals']);
$router->get('/president/camp-registration', ['PresidentController', 'campRegistration']);
$router->get('/president/finance', ['PresidentController', 'finance']);
$router->get('/president/notifications', ['PresidentController', 'notifications']);
$router->get('/president/profile', ['PresidentController', 'profile']);

// Super Admin Routes
$router->get('/super', ['SuperAdminController', 'dashboard']);
$router->get('/super/users', ['SuperAdminController', 'users']);
$router->get('/super/exams', ['SuperAdminController', 'exams']);
$router->get('/super/questions', ['SuperAdminController', 'questions']);
$router->get('/super/results', ['SuperAdminController', 'results']);
$router->get('/super/finance-ledger', ['SuperAdminController', 'financeLedger']);
$router->get('/super/blog', ['SuperAdminController', 'blog']);
$router->get('/super/gallery', ['SuperAdminController', 'gallery']);
$router->get('/super/notifications', ['SuperAdminController', 'notifications']);
$router->get('/super/settings', ['SuperAdminController', 'settings']);
$router->get('/super/profile', ['SuperAdminController', 'profile']);

// POST routes will be added in a later phase.
