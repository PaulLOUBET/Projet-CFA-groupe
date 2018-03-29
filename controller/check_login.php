<?php

$login = $_POST['login'];
$password = $_POST['password'];

if ($login=="abc" && $password=="123"){
	include "view/success.php";
}else {
	include "view/error.php";
}

?>
