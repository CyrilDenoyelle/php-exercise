<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ex3</title>
</head>
<body>
	<form action="/user.php" method="GET">
		<input type="text" name="first_name"," id="first_name" value="TrukBidul">
		<input type="text" name="last_name"," id="last_name" value="MachineChosee">
		<input type="submit" value="submit">
	</form>
	<?php 
	echo "COUCOU " . $_GET["first_name"] . " " . $_GET["last_name"]
	 ?>
</body>
</html>