<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/////////Public Routes
$routes->match(['get', 'post'],'/', 'LoginAndSignup::index');
$routes->match(['get', 'post'],'/otp-verification', 'LoginAndSignup::otpVerfication');
$routes->get('/signup', 'LoginAndSignup::signup');
$routes->post('/signup', 'LoginAndSignup::signup');

////////Protected Routes

$routes->match(['get', 'post'],'/dashboard', 'Dashboard::index');
$routes->get('/dashboard/add-student', 'CrudOperations::addStudent');
$routes->post('/dashboard/add-student', 'CrudOperations::addStudentInfo');
//$routes->post('/dashboard/new-student-info', 'CrudOperations::newStudentInfo');
$routes->get('/dashboard/edit-student-info/(:any)', 'CrudOperations::editStudentInfo/$1');
$routes->post('/dashboard/edit-student-info/(:any)', 'CrudOperations::editStudentInfo/$1');
$routes->get('/dashboard/delete/(:any)', 'CrudOperations::deleteStudentInfo/$1');
$routes->get('/dashboard/logout', 'Dashboard::logout');


//$routes->addRedirect('/users/about', 'ametecs-students-project/public/dashboard'); ///nw
//$routes->get('/dashboard', 'Dashboard::index', [ 'as' => '/main']); //nw

// $routes->get('/dynamic/(:num)/(:num)', 'Dashboard::list/$1/$2'); ///any, num, alpha, alphanum
// $routes->get('/dynamic/(:alpha)/(:alpha)', 'Dashboard::list/$1/$2');
// $routes->get('/dynamic/(:alphanum)/(:alphanum)', 'Dashboard::list/$1/$2');
//$routes->get('/dynamic/(:any)/(:any)', 'Dashboard::list/$1/$2');
