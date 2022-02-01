<?php 
namespace App;
use App\Core\{App};

$delete = App::get('database')->delete('forum','id');

header('Location: index');