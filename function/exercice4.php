<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>
	<?php
	echo "Exercice 4 <br />";
	function comparenb($inp1, $inp2){
		if($inp1 < $inp2){
			return "Le premier nombre est plus petit";
		}elseif($inp1 > $inp2){
			return "Le premier nombre est plus grand";
		}elseif($inp1 == $inp2){
			return "Les deux nombres sont identiques";
		}
	};
	echo "comparer 5 et 10 " . comparenb(5, 10) . "<br />";
	echo "comparrer 2 et 1 " . comparenb(2, 1) . "<br />";
	echo "comparrer 6 et 6 " . comparenb(2, 1) . "<br />";
	?>
</body>
</html>