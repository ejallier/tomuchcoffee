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
				<li <?= $realisationActive ?>><a href="index.php?contenu=realisation">Réalisations</a></li>
				<li <?= $equipeActive ?>><a href="index.php?contenu=equipe">L'équipe</a></li>
				<li <?= $contactActive ?>><a href="index.php?contenu=contact">Contact</a></li>

			</ul>
		</div>
	</div>
</nav>
<!-- #NAV -->
