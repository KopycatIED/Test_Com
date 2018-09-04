<!DOCTYPE html>
<html>
	<head>
		<title>Un autre exemple de réception d'un formulaire</title>
		<meta charset="utf-8">
	</head>
	<body>
		<strong><large><center>Réception</center></large></strong>
		<p>C'est ici qu'arrivent les données du formulaire.
		<?php
			$nom = $_GET['chaine1'];
			$nom != NULL || $nom = 'anonyme';
			# Une façon de compter les choses cochées
			$compte = 0;
			for($i = 0; $i < count($liste); $i++)
			if ($_GET[$liste[$i]] == "on")
			
			$compte += 1;
			echo "<p>Bonjour, $nom";
			echo "<p>Compte vaut " . "$compte . " ;

			if ($compte == count($liste))
				echo "<p>Vous aimez tout !";
			else if ($compte == 0)
				echo "<p>Vous êtes vraiment difficile !";
			else
				echo "<p>Rien à dire.";
		?>
	</body>
<html>