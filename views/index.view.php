<?php include('partials/header.view.php'); ?>

<ul>
	<?php foreach($users as $user) : ?>
		<li>
			<?= $user->name ?>
		</li>
	<?php endforeach; ?>
</ul>
<form method="POST" action="name">
	<input type="text" name="name">
	<input type="number" name="status">
	<button type="submit">submit</button>
</form>

<?php include('partials/footer.view.php'); ?>
