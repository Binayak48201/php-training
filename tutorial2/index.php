<?php

$query = require 'core/bootstrap.php';

$users = $query->selectAll('users');

echo '<ul>';
foreach($users as $user){
	echo '<li>';
	echo $user->name;
	echo '</li>';
}
echo '</ul>';

var_dump(new App\Core\Testing('testing'));



