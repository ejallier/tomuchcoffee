<?php
//Traitement PHP

	//récupérer la variable de contenu
	if ( !isset ( $_GET["contenu"] )) $_GET["contenu"] = "index";
	$contenu = $_GET["contenu"];

	//modification de classActive
		$classActive = " class='active' ";

		$indexActive = "";
		$equipeActive = "";
		$contactActive = "";
		$realisationActive = "";
		$serviceActive = "";

		switch ($contenu){
			case "index" : $indexActive = $classActive;
				break;
			case "equipe" : $equipeActive = $classActive;
				break;
			case "contact" : $contactActive = $classActive;
				break;
			case "realisation" : $realisationActive = $classActive;
				break;
			case "service" : $serviceActive = $classActive;
				break;
		}
//Afichage de contenu

	//Haut de HTML
	include ("inc/top.inc.php");
	include ("inc/nav.inc.php");

	//Contenu
	include ("content/$contenu.inc.php");

	//Bas de HTML
	include ("inc/bottom.inc.php");
