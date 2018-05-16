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
</br>
</br>
</br>
<div id="profile">
	</br>
	<center>
		<h1>Profil de <?php echo $pseudo; ?></h1>
	
	<div id=texte>
		</br>
		<a><?php echo $sex; ?></a>
		</br>
		</br>
		<a>Date de naissance :<?php  echo $birthdate; ?></a>
		</br>
		</br>
		<a>Descrition : <?php  echo $description; ?></a>
	</div>
	</center>
</div>

