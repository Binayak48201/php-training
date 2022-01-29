<?php 

$current_status= $query->selectOne('forum','status',['id'=>$_POST['id']]);

$change_status = 1 - intval($current_status);

$query->update('forum', 
['status'=>$change_status,'id'=>$_POST['id'] ],
'id');


header('Location:forum');

?>