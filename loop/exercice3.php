<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<?php
		echo "<br /> Exercice 3 <br />";
		$l = 100;
		$m = random_int(1, 100);
		while ($l > 10) {
			echo $l * $m . "<br />";
			$l--;
		}
		?>
</body>
</html>
