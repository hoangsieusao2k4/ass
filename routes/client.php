<?php

use Hoangnv\PhpOop\Controllers\Client\HomeController;
use Hoangnv\PhpOop\Controllers\Client\ProductDetails;
use Hoangnv\PhpOop\Controllers\Client\LoginController;
use Hoangnv\PhpOop\Controllers\Client\ProductController;

$router->get('/',               HomeController::class       . '@home');

// $router->get('/page',               HomeController::class       . '@home');
$router->mount('/client', function () use ($router) {
$router->get('/product',      ProductController::class . '@product');
$router->get('/product?page=',      HomeController::class . '@product');
$router->get('/{id}/details',      ProductDetails::class . '@details'); 
$router->get('/login',      LoginController::class . '@showformLogin');
$router->post('/getlogin',      LoginController::class . '@login');
$router->get('/logout',      LoginController::class . '@logout'); 
// client/products?page=

});
