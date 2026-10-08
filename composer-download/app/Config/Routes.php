<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ProductController;
use App\Controllers\StudentController;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// "Hello Developers"
// $routes->get("/welcome-page", "Site::welcomePage");
$routes->get("/welcome-page", "SiteController::welcomePage");

$routes->get("/home", "Site::index");

$routes->get("/about-us", "Site::aboutUs");

$routes->get("/services", "Site::services"); 

$routes->get("/contact-us", "Site::contactUs");

$routes->get("/welcome-user", function(){
    $data = [
        "name" => "Harsh",
        "email" => "harsh@gmail.com"
    ];

    return view("message", $data);
});

//GET request method - to get data
$routes->get("/get-method", function(){
    $data = json_encode(array(
        "status" => 1,
        "message" => "GET Request method"
    ));
    return $data;
});

//POST request method - to send data to server
$routes->post("/post-method", function(){
    $data = json_encode(array(
        "status" => 2,
        "message" => "POST Request method"
    ));
    return $data;
});

// put request method - to update data
$routes->put("/put-method", function(){
    $data = json_encode(array(
        "status" => 3,
        "message" => "PUT Request method"
    ));
    return $data;
});

// patch request method - to update data
$routes->patch("/patch-method", function(){
    $data = json_encode(array(
        "status" => 4,
        "message" => "Patch request method"
    ));
    return $data;
});

// DELETE request method - to delete data
$routes->delete("/delete-method", function(){
    $data = json_encode(array(
        "status" => 5,
        "message" => "Delete Request method"
    ));
    return $data;
});

// match method
// $routes->get("form-submit", "Site::formSubmit");
// $routes->post("form-submit", "Site::formSubmit");

// using that 2 in match method with one creation in place of the get and post two different method for same url
$routes->match(["get", "post"], "form-submit", "Site::formSubmit");

// hit same route with the different methods
// $routes->get("form-submit", "Site::formSubmit");
// $routes->post("form-submit", "Site::formSubmit");
// $routes->put("form-submit", "Site::formSubmit");
// $routes->patch("form-submit", "Site::formSubmit");
// $routes->delete("form-submit", "Site::formSubmit");

// with single method
// $route->match(["get", "post", "put", "patch", "delete"]);

// another short method - single method for all the routes method
$routes->add("form-submit", "Site::formSubmit");



// Admin routes

// $routes->get("admin/list", "AdminController::list", ["namespace" => "App\Controllers\Admin"]);
// $routes->get("admin/add", "AdminController::add", ["namespace" => "App\Controllers\Admin"]);
// $routes->get("admin/update", "AdminController::update", ["namespace" => "App\Controllers\Admin"]);
// $routes->get("admin/delete", "AdminController::delete", ["namespace" => "App\Controllers\Admin"]);

// admin route group to make the admin for that whole group as it is in the all that urls, also one time namespace
$routes->group("admin", ["namespace" => "App\Controllers\Admin"], function($routes){
    $routes->get("list", "AdminController::list");
    $routes->get("add", "AdminController::add");
    $routes->get("update", "AdminController::update");
    $routes->get("delete", "AdminController::delete");
});


$routes->get("user/home", "UserController::index", ["namespace" => "App\Controllers\User"]);

// name routes

$routes->get("/name-route", "Site::nameRoute", [
    "as" => "my-route" // this is the name for the route
]);

$routes->get("form", "Site::formSubmit");

$routes->get("contact-User", "Site::contactUser", [
    "as" => "user-contact"
]);

$routes->get("project/(:num)", "Site::projects/$1");
$routes->get("project-alpha/(:alpha)", "Site::projectsAlpha/$1");
$routes->get("project-alpha-num/(:alphanum)", "Site::projectsAlphaNum/$1");
$routes->get("project-any/(:any)", "Site::projectsAny/$1");

// query
$routes->get("services-project", "Site::servicesProject");

// error page
$routes->set404Override(function(){
    return view("custom_404");
});


// Routes array collab syntax
$routes->get("product/(:num)/(:num)", [ProductController::class, "index"]);

$routes->get("add-students", [StudentController::class, "insertData"]);
$routes->get("update-students", [StudentController::class, "updateData"]);
$routes->get("delete-students", [StudentController::class, "deleteData"]);
$routes->get("select-students", [StudentController::class, "selectData"]);


$routes->get("students-data", "NewStudentController::getData");

$routes->get("add-student", "NewStudentController::insertData");
$routes->get("update-student", "NewStudentController::updateData");
$routes->get("delete-data", "NewStudentController::deleteData");

// Join
$routes->get("inner-join", "SiteController::getDataInnerJoin");
// Left Join
$routes->get("left-join", "SiteController::getDataLeftJoin");
// Right Join
$routes->get("right-join", "SiteController::getDataRightJoin");


// Models
$routes->get("managers", "Site::getData");

// Models insert
$routes->get("insert-manager", "Site::insertManager");
// Models update
$routes->get("update-manager", "Site::updateManager");
// Models delete
$routes->get("delete-manager", "Site::deleteManager");


// Select 
$routes->get("get-managers", "Site::getManagers");

// Entity

$routes->get("entity-managers", "Site::getDataEntity");
// insert from entity
$routes->get("insert-entity", "Site::insertDataEntity");



//  Accessor

$routes->get("get-accessor", "Site::getDataAccessor");

// Virtual properties
$routes->get("virtual-get", "Site::getDataVirtual");


// Forms 
// $routes->get("add-manager", "ManagerCOntroller::index");
$routes->match(["get", "post"], "add-manager", "ManagerController::index");

// Helpers
$routes->get("create-manager", "ManagerCOntroller::addManager");

// To create a cookie
$routes->get("create-cookie", "Home::manageCookie");

// To read cookie
$routes->get("read-cookie", "Home::readCookie");

// TO delete cookie
$routes->get("delete-cookie", "Home::deleteCookie");

// TO test image tag
$routes->get("test-image", "Home::testImage");

// test css tag
$routes->get("test-css", "Home::testCssFile");

// test js tag
$routes->get("test-js", "Home::testJS");

// ul list
$routes->get("test-ul", "Home::employeeList");

// inflector singular
$routes->get("test-inflector", "Home::testInflector");

// number helpers
$routes->get("test-numbers", "Home::testNumbers");

// file system helpers
// To list all files in folder
$routes->get("test-file", "Home::testFileSystem");

// text helper
$routes->get("test-text", "Home::testText");

// custom slug
$routes->get("test-custom", "Home::testCustom");

$routes->get("my-projects", "Home::testBudget");

// services
$routes->get("get-post", "Home::testCURL");

// pagination
$routes->get("test-pagination", "Home::testPagination");

// session 
$routes->get("store", "Home::storeData");

// read session value
$routes->get("read-session", "Home::readSessionValue");

// remove session value
$routes->get("remove-session", "Home::removeData");

// URI 
$routes->get("current-url", "Home::testURL");

// send message
$routes->get("send-message", "Home::testMessage");

// Test Aagenr route
$routes->get("agent", "Home::testAgent");

// time and date
$routes->get("test-time", "Home::testDateTime");