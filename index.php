<?php

$page = $_GET['page'];
$action = $_GET["action"];

function showPage($page){
	
	include_once $page;
	
}
function checkLoggedIn(){
	
	
}

if ($page){
	switch ($page) {
		case 'accueil':
			checkLoggedIn();
			showPage("Vue/home.php");
			break;
		case 'login':
			showPage("Vue/login.html");
			break;
		case "inscription":
			showPage("view/inscription.html");
			break;
		default:
			checkLoggedIn();
			showPage("Vue/home.php");
			break;
	}
}else if ($action){
	switch ($action) {
		case 'inscription':
			include_once "controller/inscription.php";
			break;
		case 'login':
			include_once "Controler/login.php";
			break;
		case 'logout':
			include_once "Controler/logout.php";
			break;
		default:
			include "Vue/home.php";
			break;
	}
}else {
	checkLoggedIn();
	showPage("view/home.php");
}


?>