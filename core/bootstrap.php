<?php

namespace App\Core\App;

use App\Core\{App, database\Connection as Connect, database\QueryBuilder as QueryBuilder};

// $connection = require 'config.php';
// require 'function.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';
// require 'core/Router.php';
// require 'core/Request.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
	Connect::make(App::get('config')['database'])
));

// $pdo = Connection::make($connection['database']);

// return new QueryBuilder($pdo);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">