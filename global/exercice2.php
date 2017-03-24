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
		<h3>SESSION</h3>
		<div><?php echo $_SESSION['nom'] ?></div>
		<div><?php echo $_SESSION['prenom'] ?></div>
		<div><?php echo $_SESSION['age'] ?></div>
		<?php
		if ($_GET['nom'] && $_GET['prenom'] && $_GET['age']) {
			echo "<h3>SUPER-GLOBAL</h3>
			<div>" . $_GET['nom'] . "</div>
			<div>" . $_GET['prenom'] . "</div>
			<div>" . $_GET['age'] . "</div>";
		}
		?>
	</div>
</body>
</html>