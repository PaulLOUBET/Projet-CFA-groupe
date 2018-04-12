<?php

$page = $_GET['page'];
$action = $_GET["action"];

function showPage($page){
	include_once "view/header.html";
	include_once $page;
	include_once "view/footer.html";
}
function checkLoggedIn(){
	
	
}

if ($page){
	switch ($page) {
		case 'accueil':
			checkLoggedIn();
			showPage("view/home.html");
			break;
		case 'login':
			showPage("view/login.html");
			break;
		case "inscription":
			showPage("view/inscription.html");
			break;
		default:
			checkLoggedIn();
			showPage("view/home.html");
			break;
	}
}else if ($action){
	switch ($action) {
		case 'inscription':
			include_once "controller/inscription.php";
			break;
		case 'login':
			include_once "controller/login.php";
			break;
		case 'logout':
			include_once "controller/logout.php";
			break;
		default:
			include "view/home.html";
			break;
	}
}else {
	checkLoggedIn();
	showPage("view/home.html");
}


?>
