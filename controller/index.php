<?php

use App\Core\App;

$users = App::get('database')->selectAll('users');

require 'views/index.view.php';