<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');


// URL testing project
$routes->match(["get", "post"], "shortener", "URLShortener::testShorteners");
$routes->get("/(:segment)", "URLShortener::handelLongURL/$1");
