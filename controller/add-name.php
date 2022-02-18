<?php

use App\Core\App;

App::get('database')->insert('usersvdd',[
	'name' => $_POST['name'],
	'status' => $_POST['status']
]);

header('Location:/');
