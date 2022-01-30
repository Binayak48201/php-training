<?php
$content = $query->selectAll('forum');

require 'views/forum/show.view.php';
