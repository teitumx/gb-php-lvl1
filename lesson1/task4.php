<?php
	$heading = "Something with h1";
	$name = "Some title";
	$current_year = date ( 'Y' );
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> <?php echo $name; ?> </title>
</head>
<body>
	<h1><?php echo $heading; ?></h1>
	<?php echo $current_year ?>
</body>
</html>