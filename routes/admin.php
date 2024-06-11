<?php

use Hoangnv\PhpOop\Controllers\Admin\UserControllers;
use Hoangnv\PhpOop\Controllers\Admin\ProductControllers;
use Hoangnv\PhpOop\Controllers\Admin\CategorysControllers;
use Hoangnv\PhpOop\Controllers\Admin\DashboardControllers;
$router->before('GET|POST', '/admin/*.*', function() {

    if (!is_logged()) {
        header('location: ' . url('client/login') );
        exit();
    } 

    if (!is_admin()) {
        header('location: ' . url() );
        exit();
    }
    
});



$router->mount('/admin', function () use ($router) {
    $router->get('/',               DashboardControllers::class . '@dashboard');  // Danh sách

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserControllers::class . '@index');  // Danh sách
        $router->get('/create',         UserControllers::class . '@create'); // Show form thêm mới
        $router->post('/store',         UserControllers::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      UserControllers::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      UserControllers::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   UserControllers::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',   UserControllers::class . '@delete'); // Xóa
    });
    
});
$router->mount('/admin', function () use ($router) {

    // CRUD USER
    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductControllers::class . '@index');  // Danh sách
        $router->get('/create',         ProductControllers::class . '@create'); // Show form thêm mới
        $router->post('/store',         ProductControllers::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      ProductControllers::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      ProductControllers::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   ProductControllers::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',   ProductControllers::class . '@delete'); // Xóa
    });
    
});
$router->mount('/admin', function () use ($router) {

    // CRUD USER
    $router->mount('/categorys', function () use ($router) {
        $router->get('/',               CategorysControllers::class . '@index');  // Danh sách
        $router->get('/create',         CategorysControllers::class . '@create'); // Show form thêm mới
        $router->post('/store',         CategorysControllers::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      CategorysControllers::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      CategorysControllers::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   CategorysControllers::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    CategorysControllers::class . '@delete'); // Xóa
    });
    
});

// $router->get('/admin/users/',               UserController::class . '@index');
// $router->get('/admin/users/create',         UserController::class . '@create');
// $router->post('/admin/users/store',         UserController::class . '@store');
// $router->get('/admin/users/{id}',           UserController::class . '@show');
// $router->get('/admin/users/{id}/edit',      UserController::class . '@edit');
// $router->post('/admin/users/{id}/update',   UserController::class . '@update');
// $router->post('/admin/users/{id}/delete',   UserController::class . '@delete');
