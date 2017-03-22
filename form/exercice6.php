<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ex6</title>
</head>
<body>
	
	<?php
	$html = '<form action="/user.php" method="POST">
	<select name="civilite" id="civilite">
		<option value="Mm" name="Mm">Mm</option>
		<option value="Mr" name="Mr">Mr</option>
	</select>
	<input type="text" name="first_name" id="first_name" value="TrukBidul">
	<input type="text" name="last_name" id="last_name" value="MachineChosee">
	<input type="submit" value="submit"></form>';
	try {
		if ($_POST["first_name"] && $_POST["last_name"]) {
			echo "COUCOU " . $_POST["civilite"] . " " . $_POST["first_name"] . " " . $_POST["last_name"];
		}else{
			throw new Exception($html);
		}
	} catch (Exception $e) {
		echo $html;
	}

	?>
</body>
</html>