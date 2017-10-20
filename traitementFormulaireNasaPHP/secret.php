<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/nasa-logo_transparent.png" />
	<title>NASA : Formulaire et MDP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Fascinate+Inline" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
	<header>
		<img src="img/nasa-logo_transparent.png" alt="Logo de la NASA">
		
	</header>
	<main>

		<?php 
/*$pseudo 	= $_FILES['pseudo'];
$password 	= $_FILES['password'];
*/
// Je vérifie si le champ n'est pas vide :
if (isset($_POST['password']) AND $_POST['password'] == "kangourou")
{
	echo '<p class="correct">Vous avez accès aux codes secrets de la NASA !</p>';
		?>
	<h2>Voici les codes d'accès :</h2>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
        Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
        La NASA vous remercie de votre visite.
        </p>
        <?php
}
else {
	echo '<p class="incorrect">Mot de passe incorrect</p>
			<form method="POST" action="secret.php">
			<p>
				<label for="pseudo"><input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"></label>
			</p>
			<p>
				<label for="password"><input type="password" name="password" id="password" placeholder="Mot de passe"></label>
			</p>
			<p>
				<button type="submit" value="Valider">Envoyer</button>
			</p>
			<!-- <input type="hidden" name="Valider"> -->
			</p>
		</form>'
		
		;
}

?>

	</main>
	<footer>
		<p>&copy; Tous droits réservés</p>
		<p><span>Shannon Féron</span></p>
		<p>Responsable Sécurité Informatique NASA</p>
	</footer>
</body>
</html>