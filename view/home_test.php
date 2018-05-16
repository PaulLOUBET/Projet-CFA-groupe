
<?php

session_start();

if (!$_SESSION["user"]){
	header("Location: index.php?page=login");
}


include_once "model/user.php";

$user = unserialize($_SESSION["user"]);
$pseudo = $user->getPseudo();
$sex = $user->getSex();

?>
</br>
</br>
</br>
<div id="accueil">
	<center>
	</br>
		<div id="test">
			<h1>Bienvenue sur l'accueil</h1>
			<h2>Bonjour <?php echo $pseudo; ?>, comment allez-vous ?</h2>
		</div>
		</br>
	</center>
</div>
