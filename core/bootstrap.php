<?php

$connection = require 'config.php';

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';

$pdo = Connection::make($connection['database']);

return new QueryBuilder($pdo);
