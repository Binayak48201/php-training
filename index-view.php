<!DOCTYPE html>
<html>
<head></head>
<body>
	<ul>
		 <?php foreach($newArray as $key => $name) :?>
			<li><?= $key . ' : ' . $name; ?></li>
		<?php foreach($newArray['collection'] as $anotherName): ?>
			<li><?= var_dump($anotherName); ?></li>
		<?php endforeach; ?> 
		<?php endforeach; ?> 
	</ul>
</body>
</html>