<?php

session_start();

if (!$_SESSION["user"]){
	header("Location: index.php?page=login");
}


include_once "model/user.php";

$user = unserialize($_SESSION["user"]);
$pseudo = $user->getPseudo();
$sex  = $user->getSex();
$birthdate = $user->getBirthdate();
$description = $user->getDescription();

?>

<h1>Profil de <?php echo $pseudo; ?></h1>
</br>
<a><?php echo $sex; ?></a>
</br>
</br>
<a>Date de naissance :<?php  echo $birthdate; ?></a>
</br>
</br>
<a>Descrition : <?php  echo $description; ?></a>


