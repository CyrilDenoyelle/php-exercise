<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<?php
		
		echo "<br /> Exercice 2 <br />";

		$j = 0;
		$k = random_int(1, 100);
		while($j < 20){
			echo $j*$k . "<br />";
			$j++;
		}

		?>
</body>
</html>
