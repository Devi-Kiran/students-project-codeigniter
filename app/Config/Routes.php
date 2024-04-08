<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/////////Public Routes
// $routes->get('/', 'LoginAndSignup::index');
// $routes->post('/', 'LoginAndSignup::index');
$routes->match(['get', 'post'],'/', 'LoginAndSignup::index');
$routes->get('/signup', 'LoginAndSignup::signup');
$routes->post('/signup', 'LoginAndSignup::signup');

////////Protected Routes
$routes->get('/dashboard', 'Dashboard::index');
$routes->post('/dashboard', 'Dashboard::index');
$routes->post('/dashboard/new-student-info', 'Dashboard::newStudentInfo');
$routes->get('/dashboard/edit-student-info/(:any)', 'Dashboard::editStudentInfo/$1');
$routes->post('/dashboard/edit-student-info/(:any)', 'Dashboard::editStudentInfo/$1');
$routes->get('/dashboard/delete/(:any)', 'Dashboard::deleteStudentInfo/$1');
$routes->get('/dashboard/logout', 'Dashboard::logout');


//$routes->addRedirect('/users/about', 'ametecs-students-project/public/dashboard'); ///nw
//$routes->get('/dashboard', 'Dashboard::index', [ 'as' => '/main']); //nw

// $routes->get('/dynamic/(:num)/(:num)', 'Dashboard::list/$1/$2'); ///any, num, alpha, alphanum
// $routes->get('/dynamic/(:alpha)/(:alpha)', 'Dashboard::list/$1/$2');
// $routes->get('/dynamic/(:alphanum)/(:alphanum)', 'Dashboard::list/$1/$2');
//$routes->get('/dynamic/(:any)/(:any)', 'Dashboard::list/$1/$2');
