

<!DOCTYPE html>
<html lang ="fr"> 
	<head>
		<title>Chapitre 5 MYSQL</title>
		<meta charset="utf-8">
		<body>
			<?php

				# SOURCES : https://dev.mysql.com/doc/refman/5.5/en/connecting.html
				# SOURCES : https://stackoverflow.com/questions/27905049/php-warning-mysqli-connect-hy000-2002-connection-refused
				# SOURCES : Professeur Emmanuel POLONOWSKY

				# Tenter d'éviter les injections (inspiré de w3chools.net)
				function nettoyer($x){
					if ($x){
						$x = trim($x);
						$x = stripslashes($x);
						$x = htmlspecialchars($x);
					}
					return $x;
				} 

					$commande = nettoyer($_GET['afaire']);
					if (! $commande)
						$adj = "";
					else {
						$adj = "autre";

					echo "<p>Vous avez entré la commande <code>$commande</code>";

					# Connexion
					$server = "localhost";
					$user = "root";
					$passe = "motdepasse";
					$base = "labase";
					echo "mouchard_1 : " . mysqli_connect_error();
					$con = mysqli_connect($server, $user, $passe, $base)
					echo 'Could not connect to mysql' . mysqli_error());

					if (! $con)
						echo "Pas de connexion : " . mysqli_connect_error();
					else {
						echo "<p>On est connecté à la base";

						# Envoi de la commande
						if ($res = mysqli_query($con, $commande))
							echo "<p>La commande semble avoir fonctionné";
						else
							echo "<p>Aie ! " . mysqli_error($con);
							}
						}
			?>

			<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
				<p>Entrez une <?php echo $adj; ?> commande MySql pour LaBase : <input type="text" name="afaire" />
				<p><input type="submit">
				<p><?php  echo "mouchard_3 : " . mysqli_connect_error(); ?>
			</form>
		</body>
	</head>
<html>


