<!DOCTYPE html>
	<html>
		<head>
			<title>Add Student</title>
		</head>
		<body>


		<?php

		// Sources :
		// http://php.net/manual/fr/mysqli.prepare.php
		// https://www.youtube.com/watch?v=mpQts3ezPVg
		// Aide des élèves de 2ème année pour l'activation de :"mysqli_"


		if(isset($_POST['submit'])) //Determine si une variable est définie et est non NULL
		{
			$data_missing = array(); // Tableau d'affichage des valeurs non remplie

				if(empty($_POST['nom'])) // Détermine si la variable nom est vide
					{
						$data_missing[]='nom'; // Renvoie la valeur nom dans le tableau
					}
				else {
					$nom = trim($_POST['nom']); // Supprime les espaces en début et en fin de chaimne
					}

				if(empty($_POST['prenom'])) // Détermine si la variable prenom est vide
					{
						$data_missing[]='prenom';
					}
				else {
						$prenom = trim($_POST['prenom']);
					}

				if(empty($_POST['email']))
					{
						$data_missing[]='email';
					}
				else {
					$email = trim($_POST['email']);
					}

				if(empty($data_missing)) // Détermine si la variable $data_missing est vide
					{
						require_once ('mysqli_connect.php');  // Structure de contrôle, exécute le fichier
						
						$query = "INSERT INTO user (prenom, nom, email) VALUES (?,?,?)"; // Requête SQL
						$stmt = mysqli_prepare($dbc, $query) ; // Prepare une requête SQL pour l'exécution
				
						mysqli_stmt_bind_param($stmt,'sss', $nom, $prenom, $email); // Sert à lier des variables à une requete préparé par mysqli_prepare
						
					// i : Integers
					// d : Doubles
					// b : Blobs, qui sera envoyé par paquets
					// s : Type chaine

						mysqli_stmt_execute($stmt); // Exécute une requête préparée
						
						$affected_rows = mysqli_stmt_affected_rows($stmt); // Retourne le nombre total de lignes modifiées, effacées ou insérées par la derinère requête
			

						if ($affected_rows==1)
						{
							echo '<br>Student Entered';
							mysqli_stmt_close($stmt);
							mysqli_close($dbc2);
						} 
					
						else {
							echo '<br>Error Occurred <br />';
							echo mysqli_error();
							mysqli_stmt_close($stmt);
							mysqli_close($dbc2);
						}
						
					} 

				else {
					echo 'You need to enter the following data <br />';
					foreach($data_missing as $missing)
						{
							echo "$missing<br />";
						}
					}
			}	

	?>

			<form action="http://localhost/studentadded.php" method="post">

				<b>Add Sudent</b>

				<p> Nom : <input type ="text" name="nom" size"30" value="" /> </p>
				<p> Prenom : <input type ="text" name="prenom" size"30" value="" /> </p>
				<p> email :	<input type ="text" name="email" size"30" value="" /> </p>
				<p> User_ID :	<input type ="text" name="user_id" size"30" value="" /> </p>
				<p> <input type="submit" name="submit" value="Send"></p>
			</form>

</body>
</html>