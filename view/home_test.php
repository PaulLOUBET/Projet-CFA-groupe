
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

<h1>Bienvenue sur l'accueil</h1>
<h2>Bonjour <?php echo $pseudo; ?>, comment allez-vous ?</h2>
