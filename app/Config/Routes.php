<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home',['filter' => 'auth:admin']);
$routes->get('/login', 'LoginController::login');
$routes->post('/auth', 'LoginController::auth');
$routes->get('/logoff', 'LogoffController::logoff');
