<?php

$forum = $query->selectAll('forum');

require('views/forum/index.view.php');
