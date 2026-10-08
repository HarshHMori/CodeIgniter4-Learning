<?php

use App\Controllers\Api\ProductController;
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');

// API Routes
$routes->group('product', ["namespace" => "App\Controllers\Api", "filter" => "basic_auth"], function($routes){
    // [POST] - Add Product
    $routes->post("add", [ProductController::class, "addProduct"]);

    // [GET] - List Product
    $routes->get("list", "ProductController::listAllProducts");

    // [GET] - To Get Single Product Data
    $routes->get("(:num)", "ProductController::getSingleProduct/$1");

    // [PUT] - TO update Product Data
    $routes->put("(:num)", "ProductController::updateProduct/$1");

    // [DELETE] - TO Delete Product Data
    $routes->delete("(:num)", "ProductController::deleteProduct/$1");
});