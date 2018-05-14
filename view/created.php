<!DOCTYPE html>
<html>
<head>
	<title>User created</title>
	<link rel="stylesheet" type="text/css" href="view/theme.css">
</head>
<body>
	<center>
	<h1>Bravo votre compte a été créé avec succès !</h1>
	<p>Pseudo: <?php echo $createdUser->getPseudo() ?></p>
	<p>Mail: <?php echo $createdUser->getMail() ?></p>
	<br/>
	<br/>
	<a>Vous pouvez maintenant vous connecter</a>
	<br/>
	<br/>
	<a href='index.php?page=accueil'>Accueil</a>
	<center/>
</body>
</html>