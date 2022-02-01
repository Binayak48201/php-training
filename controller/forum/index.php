<?php
namespace App\Core\App;
use App\Core\{App};

$forum = App::get('database')->selectAll('forum');

require('views/forum/index.view.php');
