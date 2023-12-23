<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/sobre-nosotros', 'Home::about');
$routes->get('/servicios', 'Home::services');
$routes->get('/contacto', 'Home::contacto');

$routes->get('/login', 'Login::index');
$routes->get('/dashboard', 'Dashboard::index');

$routes->post('contact/sendEmail', 'Contact::sendEmail');
