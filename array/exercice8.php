<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>
<body>
	<?php 
	echo "Exercice 8 <br />";
	$mois = ['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];
	$mois[7] = "août";
	foreach ($mois as $moi){
		echo $moi . "<br>";
	}
	?>
</body>
</html>