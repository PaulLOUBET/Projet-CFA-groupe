<html>
<head>
	<title>Social ISEP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="view/theme.css">
</head>

<body>
<center>	
<ul>
	<li><a href='index.php?page=accueil'>Accueil</a></li>
	<?php 
		session_start();  

		if ($_SESSION["user"]){?>
			<li><a href='index.php?action=logout'>Se déconnecter</a></li>
			<li><a href="index.php?page=profile">Profil </a></li> <?php    //ne s'affiche que si l'utilisateur est connecté
		}
	?>
</ul>
</center>

