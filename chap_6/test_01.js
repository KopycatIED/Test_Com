// Sources :
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference
// https://openclassrooms.com/courses/dynamisez-vos-sites-web-avec-javascript/
// https://www.w3schools.com/js/js_json_syntax.asp
// https://jsfiddle.net/


			/*
				alert("Bonjour le monde");
				alert('Hello world');
				var prenom = "Bonjour " + prompt('Entrez votre prénom :');
				document.getElementById("par3").innerHTML = prenom;

				var MaVariable;
				MaVariable = 2;
				var Toto, Tata, Titi;
				var number = 5;
				Toto = MaVariable + number;
				alert(Toto);

				var text ='ça c\'est quelque chose';
				alert(text);

				var isTrue = true;
				var isFalse = false;
			*/

			/*	var Num1;
				var Num2 = 2;
				var Resultat_1;
				Resultat_1 =  Num1 % Num2;
				(if Resultat_1 = 0 {
					alert('chiffre pair')
					else alert('chiffre impaire')
				}); 
			*/
			/* 
				var chiffre_1, chiffre_2, chiffre_3;
				chiffre_1 = prompt('entrer votre premier chiffre :');
				chiffre_2 = prompt('entrer votre deuxième chiffre :');
				chiffre_3 = parseInt(chiffre_1) + parseInt(chiffre_2); // converti une chaine de caractère en chiffre
				alert(chiffre_3);
			*/

				// && || == ==== !non

			/*	if true {
					alert("ce message s'est bien affiché");
				}
				if false {
					alert("ce message ne sera jamais affiché");
				}
*/
			/*	if (confirm('Voulez-vous exécuter le code JavaScript de cette page ?')) {
					alert('Le code a bien été exécuté');
				}
				if (confirm('Avez-vous plus de 18 ans ?')){
					alert('Vous allez être redirigé vers le site');
				}
				else {
					alert('Au revoir');
				}
			*/
			/*
				var drawer = parseInt(prompt('choisisser votre tiroir'));
				switch (drawer) {
					case 1 : alert('contient un chapeau');
					break;

					case 2: alert('contient des piles');
					break;

					case 3 : alert('contient des câbles RJ45');
					break;

					case 4 : alert('contient des jarretière FO');
					break;

					default : alert('il va falloir rajouter des tiroir');
				}

				var startMessage = 'Votre catégorie : ', endMessage, adult = confirm('Etes vous majeur');

				endMessage = adult ? '+18' : '-18';

				alert(startMessage + endMessage);
			*/
			/*
			var age = parseInt(prompt('Taper votre age'));
			if  (age < 18 && age > 0) {
				alert('Vous êtes encore mineur');
			} 
			else if (age >= 18 && age < 50) {

				alert('Vous n\'etes pas encore senior');
			}
			else if (age >= 50 && age < 60) {
				alert('Vous etes sénior mais pas retraité');
			}
			else if (age >=60 && age <=120) {
				alert('Vous etes à la retraite, profitez du temps libre');
			}
			else if (age >120) {
				alert('Ce n\'est pas possible');
			} 
			else {
				alert('vous n\'avez pas rentré votre age');
			}  
			*/

			/*
			function showMessage() {
				alert('Et voila le travail');
			}	
			showMessage();

			var result;
			result = parseInt(prompt('Donner le nombre à multiplier par 2 :'));
			alert(result * 2);

			result = parseInt(prompt('Donner le nombre à multiplier par 2'));
			alert(result * 2);

			function byTwo() {

				var result = parseInt(prompt('Donner le nombre multiplier par 2 :'));
				alert(result * 2);
			}

			byTwo();

			alert('Vous en êtes à la moitié !');

			byTwo();

			*/

			var test = 'noir'; //On crée une variable "test" contenant le mot "noir"

			(function(){ // Début de la zone isolée

				var test = 'blanc'; // On crée une variable de même nom avec le contenu "blanc" dans la zone isolée

				alert('Dans la zone isolée, la couleur est : ' + test);


			})(); // Fin de la zone isolée. Les variables créées dans cette zone sont détruites.

			alert('Dans la zone non-isolée, la couleur est : ' + test); // Le test final contient bien le mot "noir " vu que la " zone isolée " n'a aucune influence sur le rste du code



