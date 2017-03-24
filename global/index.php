<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GlobalVar</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="flexAround">
		<div class="infoUserServ">User Agent : <?php echo $_SERVER['HTTP_USER_AGENT'] ?></div>
		<div class="infoUserServ">Ip : <?php echo $_SERVER['REMOTE_ADDR'] ?></div>
		<div class="infoUserServ">Server Name : <?php echo $_SERVER['SERVER_NAME'] ?></div>
	</div>
	<div class="lien"><?php echo "<a href='exercice2.php'>SESSION</a>" ?></div>
	<?php
	$nom = "cyril";
	$prenom = "chosemachin";
	$age = "884";
	$_SESSION["nom"] = $nom;
	$_SESSION["prenom"] = $prenom;
	$_SESSION["age"] = $age;
	?>
	<div class="lien"><?php echo "<a href='exercice2.php/?nom=$nom&prenom=$prenom&age=$age'>SUPER-GLOBALE</a>" ?></div>

	<form action="inscription.php" method="POST">
		<label for="login">Login</label>
		<input id="login" type="text" name="login" value="azerty">
		<label for="pdw">Password</label>
		<input id="pdw" type="password" name="pdw" value="123456789">
		<input type="submit" value="Connection">
	</form>
</body>
</html>