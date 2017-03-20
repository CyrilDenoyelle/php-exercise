<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>
<body>
	<?php 
	echo "Exercice 9 <br />";
	$hautdefr = ["02" => "Aisne", "59" => "Nord" , "60" => "Oise" , "62" => "Pas-de-Calais", "80" => "Somme"];
	foreach ($hautdefr as $nom){
		echo $nom . " ";
	}
	echo "<hr>Exercice 10 <br />";
	foreach ($hautdefr as $num => $nom){
		echo "Le département " . $nom . " a le numéro " . $num . ".<br />";
	}
	?>
</body>
</html>