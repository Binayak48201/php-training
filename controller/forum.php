<?php 

$questions = $query->selectAll('forum');
require 'views/forum.view.php';

?>