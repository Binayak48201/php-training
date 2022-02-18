<?php

// $connection = require 'config.php';
// require 'function.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';
// require 'core/Router.php';
// require 'core/Request.php';

App\Core\App::bind('config',require 'config.php');

App\Core\App::bind('database',new App\Core\database\QueryBuilder(
        App\Core\database\Connection::make(
                App\Core\App::get('config')['database'])
));

// $pdo = Connection::make($connection['database']);

// return new QueryBuilder($pdo);

