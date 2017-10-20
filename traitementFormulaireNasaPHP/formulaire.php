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
		<h1>Sécurité / NASA</h1>
	</header>
	<main>
		<p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
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
		</form>
		<p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
	</main>
	<footer>
		<p>&copy; Tous droits réservés</p>
		<p><span>Shannon Féron</span></p>
		<p>Responsable Sécurité Informatique NASA</p>
	</footer>
</body>
</html>