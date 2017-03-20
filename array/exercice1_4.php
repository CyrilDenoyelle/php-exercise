<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>
<body>
	<?php 
	echo "Exercice 1 <br />";
	$mois = ['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];
	foreach ($mois as $moi){
		echo $moi . " ";
	}
	echo "<hr>Exercice 2 <br />";
	echo $mois[2] . "<br />";
	echo "<hr>Exercice 3 <br />";
	echo $mois[5] . "<br />";
	echo "<hr>Exercice 4 <br />";
	$mois[7] = "août";
	foreach ($mois as $moi){
		echo $moi . " ";
	}
	?>
</body>
</html>