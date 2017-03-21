<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	echo 'Exercice 1 <br />';
	if($_GET['nom'] && $_GET['prenom']){
		echo $_GET['nom'] . " " . $_GET['prenom'] . "<br />";
	}else{
		echo 'si /?nom=trukbidul&prenom=chosemachin est present dans l\'url on affiche "trukbidul chosemachin" dans la page';
	};
	echo "<hr>Exercice 2 <br />";
	if($_GET['age']){
		echo $_GET['age'] . "ans" . "<br />";
	}else{
		echo 'si /?age=unchiffre est present dans l\'url on l\'affiche dans la page';
	};
	echo "<hr>Exercice 3 <br />";
	if($_GET['dateDebut'] && $_GET['dateFin']){
		echo "un va manger des pâtes du " . $_GET['dateDebut'] . " au " . $_GET['dateFin'];
	}else{
		echo 'si /?dateDebut=unedate&dateFin=uneautredate est present dans l\'url on l\'affiche dans la page';
	};
	echo "<hr>Exercice 4 <br />";
	if($_GET['language'] && $_GET['serveur']){
		echo "language " . $_GET['language'] . " et serveur " . $_GET['serveur'];
	}else{
		echo 'si /?langage=PHP&serveur=LAMP est present dans l\'url on affiche "PHP" et "LAMP" dans la page';
	};
	echo "<hr>Exercice 5 <br />";
	if($_GET['semaine']){
		echo "semaine " . $_GET['semaine'];
	}else{
		echo 'si /?semaine=12 est present dans l\'url on affiche la semaine dans la page';
	};
	echo "<hr>Exercice 6 <br />";
	if($_GET['batiment'] && $_GET['salle']){
		echo "batiment " . $_GET['batiment'] . " et salle " . $_GET['salle'];
	}else{
		echo 'si /?batiment=12&salle=101 est present dans l\'url on affiche le batiment et la salle dans la page';
	};
	?>
</body>
</html>