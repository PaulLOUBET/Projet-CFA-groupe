<html>
<head>
	<title>Social ISEP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="view/theme.css">
</head>

<body>	
<a href='index.php?page=accueil'>Accueil</a>	
	<?php 
		session_start();  

		if ($_SESSION["user"]){?>
			<a href='index.php?action=logout'>Se déconnecter</a> <?php    //ne s'affiche que si l'utilisateur est connecté
		}
	?>
		

