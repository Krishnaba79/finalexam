<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::Login');
$routes->get('/register', 'Home::register');
$routes->get('/homepage', 'Home::Homepage');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/delete/stu/(:any)', 'Home::deletestu/$1');
$routes->get('/stu/create', 'Home::stucreate');
$routes->get('/stu', 'Home::displaystu');
$routes->get('/updatestu/(:any)', 'Home::updatstu/$1');
$routes->match(['get','post'],'/update/stu/(:any)', 'Home::updatestudata/$1');
$routes->match(['get','post'],'/stu/add', 'Home::stuadd');
$routes->match(['get','post'],'/register-create', 'Home::registeruser');
$routes->match(['get','post'],'/login-user', 'Home::loginuser');
