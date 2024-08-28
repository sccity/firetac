<?php
use App\Controllers\LoginController;
use App\Controllers\DashboardController;
use App\Router;

$router = new Router();

// Set the default route to the login page
$router->get('/', LoginController::class, 'index'); // Redirect root to login
$router->post('/login', LoginController::class, 'index'); // Handle the login form submission
$router->get('/dashboard', DashboardController::class, 'index'); // Dashboard route
// Define other routes

// Dispatch the router
$router->dispatch();