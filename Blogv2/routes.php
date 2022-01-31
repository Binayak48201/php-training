<?php

// $routes->define([
// 	'' => 'controller/index.php',
// 	'about' => 'controller/about.php',
// 	'contact' => 'controller/contact.php',
// 	'name' => 'controller/add-name.php'
// ]);

$routes->get('','controller/index.php');
$routes->get('blogs','controller/index.php');
$routes->get('about','controller/about.php');
$routes->get('contact','controller/contact.php');
$routes->post('blogs','controller/add-name.php');



/*$routes->post('name','controller/add-name.php');*/
/*$routes->post('','controller/blogView.php');*/


