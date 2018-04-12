<?php

$email = $_POST['email'];
$sex = $_POST['sex'];
include "model/user.php";
include "model/model.php";

$model = new Model();


$createdUser = new User($email,null,null,$sex);
echo $createdUser->getMail();
$user = $model->getUserByEmail($createdUser->getMail());
if ($user==null){
	$model->createUser($createdUser);
	include_once "view/created.php";
}else {
	include_once "view/existing.php";
}




?>