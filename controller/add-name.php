<?php

$query->insert('users',[
	'name' => $_POST['name'],
	'status' => $_POST['status']
]);

header('Location:/');
