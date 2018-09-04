<!DOCTYPE html>
	<html>
		<head>
			<title>Add Student</title>
		</head>
		<body>


		<?php

		if(isset($_POST['submit'])){

			$data_missing = array();
				if(empty($_POST['nom'])){
					$data_missing[]='nom';

				} else {
					$nom = trim($POST['nom']);
					}
				if(empty($_POST['prenom'])){
					$data_missing[]='prenom';

				} else {
					$prenom = trim($POST['nom']);
					}
				if(empty($_POST['mai'])){
					$data_missing[]='mail';

				} else {
					$mail = trim($POST['mail']);
					}
			}

	?>

			 <form action="http://localhost/studentadded.php" method="post">

				<b>Add a New Sudent</b>

				<p> Nom : <input type ="text" name="nom" size"30" value="" /> </p>
				<p> Prenom : <input type ="text" name="prenom" size"30" value="" /> </p>
				<p> email :	<input type ="text" name="email" size"30" value="" /> </p>
				<p> <input type="submit" name="submit" value="Send"></p>
</form>
</body>
</html>