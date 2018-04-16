
<?php

session_start();

if (!$_SESSION["user"]){
	header("Location: index.php?page=login");
}


include_once "model/user.php";

$user = unserialize($_SESSION["user"]);
$sex = $user->getSex();
$mail = $user->getMail();

?>

<h1>Bienvenue sur l'accueil</h1>
<h2>Votre mail est : <?php echo $mail; ?></h2>
<h2>votre sexe est : <?php echo $sex; ?></h2>
