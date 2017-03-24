<?php
setcookie('login', $_POST['login']);
setcookie('pdw', $_POST['pdw']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
</head>
<body>
	<h2>GG vous etes inscriptionné</h2>
	
	<div>au login : <?php echo $_COOKIE['login']; ?></div>
	<div>au password : <?php echo $_COOKIE['pdw']; ?></div>
	<?php
	echo "<form class='forminscr' action='inscription.php' method='POST'>
	<label for='login'>Login</label>
	<input id='login' type='text' name='login' value='" . $_COOKIE['login'] . "'>
	<label for='pdw'>Password</label>
	<input id='pdw' type='password' name='pdw' value='" . $_COOKIE['pdw'] . "'>
	<input type='submit' value='Modifier'></form>";
	?>
	
</body>
</html>