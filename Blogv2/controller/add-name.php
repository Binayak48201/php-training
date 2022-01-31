<?php

$query->insert('blog',[
    'title' => $_POST['title'],
	'name' => $_POST['name'],

    'category' => $_POST['category'],

    'status' => $_POST['status'],
    'text' => $_POST['text'],
]);




header('Location:/');
