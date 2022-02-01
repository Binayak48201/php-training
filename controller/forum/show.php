<?php
namespace App;
use App\Core\{App};

$content = App::get('database')->selectAll('forum');

require 'views/forum/show.view.php';
