<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'main_controller::index');
$routes->get('hraci', 'main_controller::hraci');
$routes->get('tabulka', 'main_controller::tabulka');
$routes->get('zapasy', 'main_controller::zapasy');
