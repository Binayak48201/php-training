<?php

// $routes->define([
// 	'' => 'controller/index.php',
// 	'about' => 'controller/about.php',
// 	'contact' => 'controller/contact.php',
// 	'name' => 'controller/add-name.php'
// ]);

$routes->get('', 'controller/index.php');
$routes->get('about', 'controller/about.php');
$routes->get('contact', 'controller/contact.php');
$routes->post('name', 'controller/add-name.php');

// forum form and add method
$routes->get('forum/add-view', 'controller/forum/add-view.php');
$routes->post('forum/add-forum', 'controller/forum/add-forum.php');

// index forum
$routes->get('forum/index', 'controller/forum/index.php');
$routes->get('forum/show', 'controller/forum/show.php');
$routes->get('forum/delete', 'controller/forum/delete.php');
