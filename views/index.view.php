<?php  
require_once 'component/header.php';
?>

<div class="col-lg-8 border py-4 mb-4">
<form method="post" action="/name">
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text"  class="form-control" name="name" required>
	</div>
	<div class="form-group">
		<label for="number">Status:</label>
		<input type="number"  class="form-control" name="status" max="1" min="0" required>
	</div>
	
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


<ul>
	<?php foreach($users as $user) : ?>
	<li>
		<?= $user->name ?>
	</li>
	<?php endforeach; ?>
</ul>


<?php  
require_once 'component/footer.php';
?>