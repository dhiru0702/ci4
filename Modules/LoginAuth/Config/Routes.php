<?php

use Modules\LoginAuth\Controllers\LoginController;


$routes->get('/login_test', function()
{
    return "LoginAuth";
});
$routes->get('/login', [LoginController::class, 'login'], ['as' => 'login']);
$routes->get('/register', [LoginController::class, 'registration'], ['as' => 'register']);
// $routes->post('auth/login', '\Modules\main\Controllers\mainController::cekLogin');
