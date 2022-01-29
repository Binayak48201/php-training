<?php

// $routes->define([
// 	'' => 'controller/index.php',
// 	'about' => 'controller/about.php',
// 	'contact' => 'controller/contact.php',
// 	'name' => 'controller/add-name.php'
// ]);

$routes->get('','controller/index.php');
$routes->get('about','controller/about.php');
$routes->get('contact','controller/contact.php');
$routes->get('forum','controller/forum.php');
$routes->post('name','controller/add-name.php');
$routes->post('forum','controller/add-forum.php');
$routes->post('changeforumstatus','controller/change-forum-status.php');
$routes->post('deleteforum','controller/delete-forum.php');
