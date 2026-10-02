<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/customers', 'Customers::index');
$routes->get('/users', 'Users::index');
$routes->get('customers', 'Home::customers');
$routes->get('customers/new', 'Home::newCustomer');
$routes->post('customers/create', 'Home::createCustomer');
$routes->get('customers', 'Home::customers');