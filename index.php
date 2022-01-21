<?php  

require 'function.php';

$newArray = [
	'age' => 27,
	'HairColor' => "black",
	'Name' => "Binayak",
	'collection' => ['firstorder' => 'first','seconorder' => 'second']
];
$a = '**';

dd(preg_match('/([A-z]...)*/', $a)); //boolea

preg_match_all(pattern, subject, matches)


// require 'index-view.php';
