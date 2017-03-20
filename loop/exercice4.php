<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<?php
		echo "<br /> Exercice 4 <br />";
		$n = 1;

		while ($n < 10) {
			$result = $n+=$n/2;
			echo $result . "<br />";
		}
		?>
</body>
</html>
