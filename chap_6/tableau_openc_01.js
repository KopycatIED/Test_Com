// Test tableau Open ClassRooms
// 30/06/2018
// THOIRON

/*alert('Bienvenu sur le site !!')

var Nom_T, Prenom_T;

	Prenom_T = prompt('entrer votre Prenom :');

var myArray = ['Sébastien','David','Martin','Julien'];

for (var i = 0; i < myArray.length; i++) {
	alert(myArray[i])
};*/




//*********************************
//Exercice des nombres Opencalssrooms

for (var i = 0; i < 3; i++){

	var Nombre = parseInt(prompt('Entrer un chiffre entre 0 et 999' )); //Question de base
	var TestNombre = parseInt(Nombre); // Vérification que c'est  bien un nombre

	if (isNaN(TestNombre) == true) {  // Si ce n'est pas un Nombre
			alert('Ce n est pas un nombre');
	}

	if (isNaN(TestNombre) == false) { // Si c'est un nombre

		if (Nombre < 1 || Nombre > 999){ // Si le nombre est en dehors de la plage
		 
			alert('Votre chiffre est en dehors de la plage.');
		}
		else {  // Si le nombre est dans la plage 
			
			// Couper le nombre en unité / centaine / dixaine


			var _Centaine, _Dixaine, _Unite;
			var unite = Nombre % 10;
			var dixaine = ((Nombre - unite) % 100)/10;
			var centaine = ((Nombre - ((Nombre - unite) % 100) - unite) % 1000)/100;
			var result1, result2;
			

			result1 = centaine +'-'+ dixaine +'-'+ unite;
			alert(result1);			

			// Onze(de 11 71 91)
			if (unite == 1 && dixaine == 1) {
				_Dixaine = '';
				_Unite = 'onze';
			}
			else if (unite == 1 && dixaine == 7) {
				_Unite = 'onze';
				_Dixaine = 'Soixante-et'
			}
			else if (unite == 1 && dixaine == 9) {
				_Unite = 'onze';
				_Dixaine = 'quatre-vingt'
			}
			else if (unite == 1 && ((dixaine != 1) ||(dixaine != 7)||(dixaine != 9))) {
				_Unite = 'un';
			} 
			
			// douze (de 12 72 92)
			if (unite == 2 && dixaine == 1) {
				_Dixaine = '';
				_Unite = 'douze';
			}
			else if (unite == 2 && dixaine == 7) {
				_Unite = 'douze';
				_Dixaine = 'soixante'
			}
			else if (unite == 2 && dixaine == 9) {
				_Unite = 'douze';
				_Dixaine = 'quatre-vingt'
			}
			else if (unite == 2 && ((dixaine != 1) ||(dixaine != 7)||(dixaine != 9))) {
				_Unite = 'deux';
			}

			// treize (de 13 73 93)
			if (unite == 3 && dixaine == 1) {
				_Dixaine = '';
				_Unite = 'treize';
			}
			else if (unite == 3 && dixaine == 7) {
				_Unite = 'treize';
				_Dixaine = 'soixante'
			}
			else if (unite == 3 && dixaine == 9) {
				_Unite = 'treize';
				_Dixaine = 'quatre-vingt'
			}
			else if (unite == 3 && ((dixaine != 1) ||(dixaine != 7)||(dixaine != 9))) {
				_Unite = 'trois';
			}

			// quatorze (de 14 74 94)
			if (unite == 4 && dixaine == 1) {
				_Dixaine = '';
				_Unite = 'quatorze';
			}
			else if (unite == 4 && dixaine == 7) {
				_Unite = 'quatorze';
				_Dixaine = 'soixante'
			}
			else if (unite == 4 && dixaine == 9) {
				_Unite = 'quatorze';
				_Dixaine = 'quatre-vingt'
			}
			else if (unite == 4 && ((dixaine != 1) ||(dixaine != 7)||(dixaine != 9))) {
				_Unite = 'quatre';
			}

			// quinze (de 15 75 95)
			if (unite == 5 && dixaine == 1) {
				_Dixaine = '';
				_Unite = 'quinze';
			}
			else if (unite == 5 && dixaine == 7) {
				_Unite = 'quinze';
				_Dixaine = 'soixante'
			}
			else if (unite == 5 && dixaine == 9) {
				_Unite = 'quinze';
				_Dixaine = 'quatre-vingt'
			}
			else if (unite == 5 && ((dixaine != 1) ||(dixaine != 7)||(dixaine != 9))) {
				_Unite = 'cinq';
			}

			// seize (de 16 76 96)
			if (unite == 6 && dixaine == 1) {
				_Dixaine = '';
				_Unite = 'seize';
			}
			else if (unite == 6 && dixaine == 7) {
				_Unite = 'seize';
				_Dixaine = 'soixante'
			}
			else if (unite == 6 && dixaine == 9) {
				_Unite = 'seize';
				_Dixaine = 'quatre-vingt'
			}
			else if (unite == 6 && ((dixaine != 1) ||(dixaine != 7)||(dixaine != 9))) {
				_Unite = 'six';
			}

			// Régulier 10
			if (dixaine == 1 && unite==0) {
				
				_Dixaine = 'dix';
				_Unite = '';
			}
	
			// Régulier 20 21 22 23 24 25 26 27 28 29
			if (dixaine == 2 && unite == 0 ){
				_Dixaine = 'vingt';
				_Unite = '';
			}

			else if (dixaine == 2 && unite != 0 ){
				_Dixaine = 'vingt-et';
			}


			// Régulier 30 31 32 33 34 35 36 37 38 39

			if (dixaine == 3 && unite == 0 ){
				_Dixaine = 'trente';
				_Unite = '';
			}

			else if (dixaine == 3 && unite != 0 ){
				_Dixaine = 'trente-et';
			}
 
			// Régulier 40 41 42 43 44 45 46 47 48 49

			if (dixaine == 4 && unite == 0 ){
				_Dixaine = 'quarante';
				_Unite = '';
			}

			else if (dixaine == 4 && unite != 0 ){
				_Dixaine = 'quarante-et';
			}
			// Régulier 50 51 52 53 54 55 56 57 58 59

			if (dixaine == 5 && unite != 1 ){  // 50 52 53 54 55 56 57 58 59
				_Dixaine = 'cinquante';
				_Unite = '';
			}

			else if (dixaine == 5 && unite ==1 ){
				_Dixaine = 'quarante-et';
			}




			// Régulier 60 61 62 63 64 65 66 67 68 69

			if (dixaine == 6 && unite == 0 ){
				_Dixaine = 'soixante';
				_Unite = '';
			}

			else if (dixaine == 6 && unite != 0 ){
				_Dixaine = 'soixante-et';
			}

			// Régulier 77 78 79



			// Régulier 80 81 82 83 84 85 86 87 88 89

			if (dixaine == 8){
				_Dixaine = 'quatre-vingt';
			}


			// Régulier 


			if (unite == 6 && dixaine == 1) {
				_Dixaine = '';
				_Unite = 'seize';
			}
			else if (unite == 6 && dixaine == 7) {
				_Unite = 'seize';
				_Dixaine = 'soixante'
			}
			else if (unite == 6 && dixaine == 9) {
				_Unite = 'seize';
				_Dixaine = 'quatre-vingt'
			}
			else if (unite == 6 && ((dixaine != 1) ||(dixaine != 7)||(dixaine != 9))) {
				_Unite = 'six';
			}

			//******************
		var separateur1, separateur2;

		// Zéro pour les dixaines et les centaines
		if (centaine == '' || '0') {
			_Centaine = '';
			separateur1 = '';
		}
		if ((centaine == '' || '0') && (dixaine == '' || '0')){
			_Centaine ='';
			_Dixaine ='';
			separateur1='';
			separateur2='';
		}
		//	else if (dixaine == 1 && unite==1) {
		//		_Dixaine = 'onze';
		//	}
		// Centaine
		if (centaine == 1) {
			_Centaine = 'cent';
		}
		
		else if (centaine == 2) {
			_Centaine = 'deux-cent';
		}
		else if (centaine == 3) {
			_Centaine = 'trois-cent';
		}
		else if (centaine == 3) {
			_Centaine = 'trois-cent';
		}
		else if (centaine == 4) {
			_Centaine = 'quatre-cent';
		}
		else if (centaine == 5) {
			_Centaine = 'cinq-cent';
		}
		else if (centaine == 6) {
			_Centaine = 'six-cent';
		}
		else if (centaine == 7) {
			_Centaine = 'sept-cent';
		}
		else if (centaine == 8) {
			_Centaine = 'huit-cent';
		}
		else if (centaine == 9) {
			_Centaine = 'neuf-cent';
		}
		

			result2 = _Centaine + separateur1 + _Dixaine + separateur2 + _Unite;
			alert(result2);

			break;
		}
	}
}
alert('Good bye');







//*************************************************
/*var myArray = ['Sébastien','David', 'Whesh ma gueule'];

alert(myArray[2]); // Affiche le 3ème item

myArray.push('Ludovic'); // Ajoute un 4ème item

myArray.unshift('Lolo'); // Ajoute un item au début de tableau

myArray.shift(); // retire le premier item

myArray.pop(); // retire le dernier item

alert(myArray);

for (var i=0; i < myArray.lenth; i++){

	alert(myArray[i]);
}*/