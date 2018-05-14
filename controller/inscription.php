<?php

$email = $_POST['email'];
$pseudo = $_POST['pseudo'];
$sex = $_POST['sex'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];
include "model/user.php";
include "model/model.php";

$model = new Model();

$pass = password_hash($password, PASSWORD_DEFAULT);

$createdUser = new User($email,$pass,$pseudo,$birthdate,$sex);
$user = $model->getUserByEmail($createdUser->getMail());
if ($user==null){
	$model->createUser($createdUser);
	include_once "view/created.php";
}else {
	include_once "view/existing.php";
}



?>