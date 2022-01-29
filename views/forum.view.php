<?php  
require_once 'component/header.php';
?>


<form class="border p-4" method="POST" action="/forum">
  <div class="form-group">
    <label for="title">Title:</label>
    <input class="form-control" id="title" name="title" placeholder="Enter the title" required>
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" id="description" name="description" placeholder="Enter the description " rows="3"
      required></textarea>
  </div>

  <div class="form-group">
    <label for="number">Status:</label>
    <input type="number" class="form-control" name="status" max="1" min="0" required>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-success">Submit</button>
  </div>


</form>




<?php 
  if(count($questions)!=0){

    foreach($questions as $question){
?>
<div class="card text-white <?= $question->status==1?"bg-success":"bg-primary" ?> mt-4">
  <div class="card-header">
    <?=$question->title?>
    <div class="float-right">
      <form action="deleteforum" method="post">
        <input type="hidden" name="id" value=<?=$question->id?>>
        <button type="submit" class="btn btn-danger">X</button>
      </form>
    </div>
  </div>
  <div class="card-body">
    <p class="card-text"><?=$question->description?></p>
    <hr>
    <form action="changeforumstatus" method="post">
      <input type="hidden" name="id" value=<?=$question->id?>>
      <button type="submit"
        class="btn text-white float-right <?= $question->status==1?"bg-primary":"bg-success" ?>">Change Status</button>
    </form>

  </div>
</div>
<?php
  }
}else{
  echo "<div class='card mt-4 bg-secondary text-white text-center py-3'>No queries found.</div>";
}
  
?>

<?php  
require_once 'component/footer.php';
?>