<?php  

require 'function.php';

$pdo = connection();

dd($pdo);



$newArray = [
	'age' => 27,
	'HairColor' => "black",
	'Name' => "Binayak",
	'collection' => ['firstorder' => 'first','seconorder' => 'second']
];


// require 'index-view.php';
