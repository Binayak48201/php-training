<?php  

require 'vendor/autoload.php';

require 'core/bootstrap.php';

require App\Core\Router::load('routes.php')
		->direct(App\Core\Request::url(),App\Core\Request::method());


