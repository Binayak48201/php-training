<?php 

$query->insert('forum',[
	'title' => $_POST['title'],
    'description' => $_POST['description'],
	'status' => intval($_POST['status'])
]);

header('Location:forum');

?>