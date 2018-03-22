<?php

$page = $_GET['page'];


switch ($page) {
	case 'inscription':
		include "view/inscription.html";
        break;
    case 'home':
		include "view/home.php";
        break;
	default:
		include "view/home.html";
		break;
}

?>