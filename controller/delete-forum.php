<?php 

$query->delete('forum',['id'=>$_POST['id']]);

header('Location:forum');
?>