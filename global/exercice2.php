<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercice2</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="flexAround">
		<?php
		if ($_GET['nom'] && $_GET['prenom'] && $_GET['age']) {
			echo "<h3>SUPER-GLOBAL</h3>
			<div>" . $_GET['nom'] . "</div>
			<div>" . $_GET['prenom'] . "</div>
			<div>" . $_GET['age'] . " ans</div>";
		}
		else {
			echo "<h3>SESSION</h3>
			<div>".$_SESSION['nom']."</div>
			<div>".$_SESSION['prenom']."</div>
			<div>".$_SESSION['age']." ans</div>";
		}
		?>
	</div>
</body>
</html>