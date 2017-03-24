<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GlobalVar</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form class="forminscr" action='inscription.php' method='POST'>
	<?php
	if ($_COOKIE['login'] && $_COOKIE['pdw']) {
		echo "<label for='login'>Login</label>
		<input id='login' type='text' name='login' value='" . $_COOKIE['login'] . "'>
		<label for='pdw'>Password</label>
		<input id='pdw' type='password' name='pdw' value='" . $_COOKIE['pdw'] . "'>
		<input type='submit' value='Modifier'>";
	}
	else{
		echo "<label for='login'>Login</label>
		<input id='login' type='text' name='login'>
		<label for='pdw'>Password</label>
		<input id='pdw' type='password' name='pdw'>
		<input type='submit' value='Connection'>";
	}
	?>
	</form>
	<div class="flexAround">
		<div class="infoUserServ">User Agent : <?php echo $_SERVER['HTTP_USER_AGENT'] ?></div>
		<div class="infoUserServ">Ip : <?php echo $_SERVER['REMOTE_ADDR'] ?></div>
		<div class="infoUserServ">Server Name : <?php echo $_SERVER['SERVER_NAME'] ?></div>
	</div>
	<a href='exercice2.php'>transport de variable en : SESSION</a>
	<?php
	$nom = "cyril";
	$prenom = "chosemachin";
	$age = "884";
	$_SESSION["nom"] = $nom;
	$_SESSION["prenom"] = $prenom;
	$_SESSION["age"] = $age;

	echo "<a href='exercice2.php/?nom=$nom&prenom=$prenom&age=$age'>transport de variable en : SUPER-GLOBALE</a>";
	?>
</body>
</html>