<!DOCTYPE html>
<html>
<head></head>
<body>
	<!-- <ul>
		 <?php foreach($newArray as $key => $name) :?>
			<li><?= var_dump($name); ?></li>
		<?php endforeach; ?> 
	</ul> -->
	<form action="/" method="post" enctype="multipart/form-data">
		<input type="email" name="name" required> 
		<textarea name="descriptiosn" id="" cols="30" rows="10"></textarea>
		<br>
		<select name="options" id="">
			<option value="1">Cat</option>
			<option value="2">Dogs</option>
		</select>
		<input type="text" hidden name="hidden" value="<?php echo time(); ?>">
		<button type="submit">Submit</button>
	</form>
</body>
</html>			