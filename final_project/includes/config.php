<?php

define("THIS_PAGE",basename($_SERVER["PHP_SELF"]));
switch(THIS_PAGE)
{
	case "index.php":
	$banner = "welcome.png";
	$title = "Welcome to Grade A Plus School";
	$pageID = "Welcome to Grade A Plus School!";
	$active = "active";
	break;
	
	case "admission.php":
	$banner = "admission.png";
	$title = "Welcome to Grade A Plus School";
	$pageID = "Welcome to Grade A Plus School!";
	$active = "active";
	break;
	
	case "download.php":
	$banner = "under contruction.png";
	$title = "Documents Center";
	$pageID = "Docements center";
	$active = "active";
	break;
	
	case "contact.php":
	$banner = "contactus.png";
	$title = "Contact us";
	$pageID = "Contact us";
	$active = "active";
	break;
	
	case "aboutus.php":
	$banner = "aboutus.png";
	$title = "About us";
	$pageID = "About us";
	$active = "active";
	break;
	
	case "media.php":
	$banner = "under contruction.png";
	$title = "Media Center";
	$pageID = "Media center";
	$active = "active";
	break;
	
    case "news.php":
	$banner = "news.jpg";
	$title = "Lastest News";
	$pageID = "Lastest News";
	$active = "active";
	break;
	
	case "preclass.php":
	$banner = "preclass.jpg";
	$title = "Preparatory Class";
	$pageID = "Preparatory Class";
	$active = "active";
	break;
	
		
	default:
	$banner = "welcome.png"; 
	$title = "Welcome to Grade A Plus School";
	$pageID = "Welcome to Grade A Plus School!";
	$active = "";
}
?>

