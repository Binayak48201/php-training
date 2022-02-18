<?php

use App\Core\database\{Connection,QueryBuilder};

$connection = require 'config.php';

require 'vendor/autoload.php';

return new QueryBuilder(Connection::make($connection['database']));