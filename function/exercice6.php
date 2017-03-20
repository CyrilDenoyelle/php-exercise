<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>
	<?php
	echo "Exercice 6 <br />";
	function concatnbstring($nom, $prenom, $age){
		return "Bonjour " . $nom . " " . $prenom . ",tu as " . $age . " ans";
	};
	echo concatnbstring("Ipsum", "Lorem", "12 637.002")
	?>
</body>
</html>