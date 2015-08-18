<?php
// Traitement php

// Récupération de la variable de contenu
if ( !isset( $_GET["contenu"] ) ) $_GET["contenu"] = "index";
// Si $_GET["contenu"] n'existe pas, je l'invente et lui assigne "index"
$contenu = $_GET["contenu"];

// Définition de la page active

$indexActive = "";
$serviceActive = "";
$realisationActive = "";
$equipeActive = "";
$contactActive = "";

switch ($contenu){
	case "index" : 		$indexActive = 		" class='active' ";
		break;
	case "service" : 	$serviceActive = 	" class='active' ";
		break;
	case "realisation" : $realisationActive = " class='active' ";
		break;
	case "equipe" : 	$equipeActive = 	" class='active' ";
		break;
	case "contact" : 	$contactActive = 	" class='active' ";
		break;
	default : 			$indexActive = 		" class='active' ";
}

?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Too Much Coffe</title>
	<link rel="stylesheet" href="style/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/css/social-embedded.css">
	<link rel="stylesheet" href="style/css/perso.css">
</head>
<body>
<div class="wrap ">
	
<!-- HEADER -->
<header class="site-header container-fluid">

	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">
				<a href="index.html">
					<img src="img/logo.png" alt="Too much coffee">
				</a>
			</h1>
		</div>	
	</div>
	
</header>
<!-- /#HEADER	-->


<!-- #NAV -->
<nav class="navbar navbar-default">
	<div class="container">
    	<div class="navbar-header">
    		<button 
    			type="button" 
    			class="navbar-toggle collapsed" 
    			data-toggle="collapse" 
    			data-target="#menu-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="index.html">Too Much Coffee Web Agency</a>
      	</div>
		<div class="collapse navbar-collapse" id="menu-collapse">
      		<ul class="nav navbar-nav navbar-right">
				<li <?= $indexActive ?>><a href="index.php?contenu=index">Accueil</a></li>
				<li <?= $serviceActive ?>><a href="index.php?contenu=service">Services</a></li>
				<li <?= $realisationActive ?>><a href="#">Réalisations</a></li>
				<li <?= $equipeActive ?>><a href="index.php?contenu=equipe">L'équipe</a></li>
				<li <?= $contactActive ?>><a href="#">Contact</a></li>
			
			</ul>
		</div>
	</div>
</nav>
<!-- #NAV -->

<?php
// include sur le contenu
include ("content/$contenu.inc.php");
?>

<!-- #FOOTER -->

<footer class="site-footer ">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>Too much Coffee Web Agency</h4>
				
				<p class="clearfix"><img src="img/logo.png" alt="" width="100px" class="pull-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolore corporis aliquam nemo nulla porro optio iure saepe eius debitis!</p>
			</div>
			<div class="col-md-6">
				
				<div class="row">
					<div class="col-sm-6">
					<h4>Navigation</h4>
						<ul class="nav nav-pills nav-stacked">
  							<li><a href="#">Contact</a></li>
  							<li><a href="#">Mentions légales</a></li>
						</ul>
					</div>
					<div class="col-sm-6">
					<h4>Social</h4>
						<ul class="nav nav-pills">
 							<li><a href=""><i class="tmc-gplus"></i></a></li>
 							<li><a href=""><i class="tmc-facebook"></i></a></li>
 							<li><a href=""><i class="tmc-twitter"></i></a></li>
 							<li><a href=""><i class="tmc-github-circled"></i></a></li>
				</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</footer>
<!-- #FOOTER -->

</div>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>