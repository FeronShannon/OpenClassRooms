/* 
Activité : jeu de devinette
*/

// NE PAS MODIFIER OU SUPPRIMER LES LIGNES CI-DESSOUS
// COMPLETEZ LE PROGRAMME UNIQUEMENT APRES LE TODO

console.log("Bienvenue dans ce jeu de devinette !");

// Cette ligne génère aléatoirement un nombre entre 1 et 100
var solution = Math.floor(Math.random() * 100) + 1;

// Décommentez temporairement cette ligne pour mieux vérifier le programme
console.log("(La solution est " + solution + ")");

// TODO : complétez le programme
var counter = 0;
document.getElementById('form').onsubmit = function() {
	counter++;
	if (counter < 7){
	    var choix = document.getElementById('choix').value;

		if (solution == choix){
			console.log("Trouvé ! C'était bien " + solution + " ! Tu as trouvé en " + counter + " essai(s), tu peux aller faire une sieste !");
		}
		else if (solution < choix ){
			console.log("Cherche un chiffre ou un nombre plus petit et tape-le, au sens figuré !");
		}
		else{
			console.log("Cherche un chiffre ou un nombre plus grand...");
		}
		
	} else {
		console.log("Perdu ! Tu n'as pas trouvé en 6 essais ! La solution était " + solution + ". Touche F5 pour recommencer !");
	}
	return false;
};
