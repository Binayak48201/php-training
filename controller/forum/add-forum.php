<?php

namespace App\Core\App;

use App\Core\{App, database\QueryBuilder};


$query = App::get('database')->insert('forum', [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'status' => $_POST['status']
]);


header('Location:index');
