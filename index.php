<?php  

$query = require 'core/bootstrap.php';

$routes = new Router;

require 'routes.php';

$redirect_root = Request::url();

require $routes->direct($redirect_root);

// Router::load('routes.php')->direct($redirect_root);
// $users = $query->selectAll('users');


// require 'index-view.php';





