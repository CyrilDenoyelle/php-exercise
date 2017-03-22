<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ex8</title>
</head>
<body>
	
	<?php
	$html = '<form action="/user.php" method="POST">
	<select name="civilite" id="civilite">
		<option value="Mm" name="Mm">Mm</option>
		<option value="Mr" name="Mr">Mr</option>
	</select>
	<input type="text" name="first_name" id="first_name" value="TrukBidul">
	<input type="text" name="last_name" id="last_name" value="MachineChosee">
	<input type="text" name="file" id="file" value="coucou.paf">
	<input type="submit" value="submit"></form>';
	try {
		if (!$_POST["first_name"] || !$_POST["last_name"] || !$_POST["file"]) {
			throw new Exception($html);
		}else{
			$filearray = preg_split('/\./',$_POST["file"]);
			if($filearray[1] == "pdf"){
				$filename = $filearray[0];
				$fileextension = $filearray[1];
				echo "COUCOU " . $_POST["civilite"] . " " . $_POST["first_name"] . " " . $_POST["last_name"] . "<br />" . "et le fichier :" . $filename . ". Et dont l'extension est : " . $fileextension;
			}else{
				throw new Exception($html . "seul les fichier pdf sont admis (et non " . $filearray[1] . ")");
			}
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	?>
</body>
</html>