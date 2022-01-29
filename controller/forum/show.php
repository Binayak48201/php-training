<?php
$status = 1;
$content = $query->getDataById('forum','id');

require 'views/forum/show.view.php';
