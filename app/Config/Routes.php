<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('nosotros', 'Home::quienesSomos');

$routes->get('contacto', 'Home::contactos');
