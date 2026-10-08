<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');


// Open Routes
$routes->post("/auth/register", "Api\AuthorController::registerAuthor");
$routes->post("/auth/login", "Api\AuthorController::loginAuthor");

// Protected APIs
$routes->group("author", ["namespace" => "App\Controllers\Api", "filter" => "jwt_auth"], function($routes){
    // Author routes
    $routes->get("profile", "AuthorController::authorProfile");
    $routes->get("logout", "AuthorCOntroller::logoutAuthor");

    // Books Routes
    $routes->post("add-book", "BookController::createBook");
    $routes->get("list-books", "BookController::authorBooks");
    $routes->delete("delete-book/(:num)", "BookController::deleteAuthorBook/$1");
});