<?php

$page = $_GET['page'];


switch ($page) {
	case 'inscription':
		include "view/inscription.html";
        break;
    case 'home':
		include "view/home.php";
		break;
	case 'check_login':
		include "controller/check_login.php";
		break;
	case 'login':
		include "view/login.html";
		break;
	default:
		include "view/login.html";
		break;
}

?>