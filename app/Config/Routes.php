<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/',[Home::class,'userList'],['as'=>'home']);
$routes->get('add-user',[Home::class,'addUser'],['as'=>'add-user']);
$routes->post('/test',[Home::class,'storeTestForm'],['as'=>'store_test']);