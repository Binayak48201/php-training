<?php

$query->insert('forum', [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'status' => $_POST['status']
]);


header('Location: add-view');