<?php

$login = $_POST['email'];
$password = $_POST['password'];

include ("model/user.php");
include ("model/model.php");

$model = new Model();
$user = $model->getUserByEmail($login);


if ($user!= null and password_verify($password, $user->getPassword())){
	session_start();
	$_SESSION["user"]=serialize($user);
	header("Location: index.php?page=accueil");
}
else{
	header("Location: index.php?page=login");
}

?>