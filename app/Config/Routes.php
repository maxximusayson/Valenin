<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/career', 'Career::index');
$routes->get('/services', 'Services::index');
$routes->get('/contact', 'Contact::index');


//message routes Contact US
$routes->post('/contact/submit', 'Contact::submit');




