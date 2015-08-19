<?php
//Traitement

//Récupération des variables
if ( !isset( $_POST["mail"] ) ) $_POST["mail"] = "";
if ( !isset( $_POST["message"] ) ) $_POST["message"] = "";
if ( !isset( $_POST["sujet"] ) ) $_POST["sujet"] = "";

$mail = $_POST["mail"];
$message = $_POST["message"];
$sujet = $_POST["sujet"];


//Test
//echo mail;

if ( !isset( $_POST["envoyer"] ) ){
	// Afficher le formulaire
	//echo "Form";
	$contactContent = "contactForm";
}else{
	// Composer le message
	// Envoyer le message
	// Affiche la confirmation
	//echo "Conf";
	$dest = "lxiv.bourbon@gmail.com";
	$txt = "Message provenant du site web écrit par $mail \r\n";
	$txt .= $message;

	mail ($dest, $sujet, $txt);

	$contactContent = "contactConfirm";
}

	include("../inc/top.inc.php");
	include("../inc/nav.inc.php");
?>

<!-- MAIN -->
<main class="container">
	<article class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h2>Contact</h2>
			</div>
		</div>

	<div class="col-md-12">
		<?php include("$contactContent.inc.php"); ?>
	</div>
	</article>



</main>

<!-- /MAIN -->

<?php
	include("../inc/bottom.inc.php");
?>
