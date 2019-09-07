<?php

require dirname(__DIR__) . '/vendor/autoload.php';

session_start();

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');
use Core\View;
//Routes
$router = new Core\Router();

// Add the routes


if(empty($_SESSION))
{

}else{
    $router->add('home', ['controller'=> 'Home', 'action' => 'home']);
    $router->add('address', ['controller' => 'Address', 'action' => 'address']);
    $router->add('view-address', ['controller' => 'AddressBookController', 'action' => 'ViewAll']);
    $router->add('logout', ['controller'=> 'LogoutController', 'action' => 'logout']);
}
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('login', ['controller' => 'AuthController', 'action' => 'login']);
$router->add('register', ['controller' => 'AuthController', 'action' => 'register']);
$router->add('{controller}/{action}');



// routers for queries

$router->add('authenticate', ['controller' => 'LoginController', 'action' => 'login-query']);
$router->add('add_customer', ['controller' => 'RegisterController', 'action' => 'register-query']);
$router->add('edit_address', ['controller' => 'AddressBookController', 'action' => 'editAddress']);
$router->add('add_address', ['controller' => 'AddressBookController', 'action' => 'insertAddress']);
$router->add('get_address', ['controller' => 'AddressBookController', 'action' => 'getAddress']);
$router->dispatch($_SERVER['QUERY_STRING']);
