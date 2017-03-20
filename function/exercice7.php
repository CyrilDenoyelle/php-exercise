<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function</title>
</head>
<body>
	<?php
	echo "Exercice 7 <br />";
	function agegenre($age, $genre = "alien"){
		$result = "Vous êtes un";
		if($genre == "Homme"){
			$result .= " homme ";
		}elseif($genre == "Femme"){
			$result .= "e femme ";
		}elseif($genre == "alien"){
			$result .= " alien ";
		};
		$result .= "et vous êtes ";
		if($age >= 18){
			$result .= "majeur";
		}elseif ($age < 18) {
			$result .= "mineur";
		}
		return $result;
	};
	echo agegenre(18, "Homme")
	?>
</body>
</html>