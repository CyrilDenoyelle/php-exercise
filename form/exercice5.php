<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ex5</title>
</head>
<body>
	<form action="/user.php" method="POST">
		<select name="civilite" id="civilite">
			<option value="Mm" name="Mm">Mm</option>
			<option value="Mr" name="Mr">Mr</option>
		</select>
		<input type="text" name="first_name"," id="first_name" value="TrukBidul">
		<input type="text" name="last_name"," id="last_name" value="MachineChosee">
		<input type="submit" value="submit">
	</form>
	<?php
	echo "COUCOU " . $_POST["first_name"] . " " . $_POST["last_name"] . " " . $_POST["civilite"]
	?>
</body>
</html>