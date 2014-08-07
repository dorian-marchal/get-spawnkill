<?php

	//Génération d'une chaine userscript alétaoire
	$rand = md5(uniqid(rand(), true)) . '.user.js';

	$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
	$browser = "other";
	if(strpos($user_agent, "firefox")) {
		$browser = "firefox";
	}
	else if(strpos($user_agent, "chrome")) {
		$browser = "chrome";
	}
	else if(strpos($user_agent, "presto") || strpos($user_agent, "opera")) {
		$browser = "opera";
	}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>JVC SpawnKill</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="fancybox/jquery.fancybox.js"></script>
	<script src="js/script.js"></script>
</head>

<body>
	<div class="container" >
		<section id="fixed-box" class="col-lg-push-7 col-lg-4 col-md-push-8 col-md-4" >
			<div class="clearfix" >
				<a href="#download-box" id="get-spawnkill" class="btn btn-lg btn-success" >
					<span class="glyphicon glyphicon-download-alt"></span> Installer SpawnKill
				</a>
				<a href="https://github.com/dorian-marchal/spawnkill" target="_blank" id="to-github" class="btn btn-lg btn-default" >
					<span class="glyphicon glyphicon-link"></span> Github
				</a>
			</div>
			<div id="sondage" >
				<h3>Voter pour la prochaine fonctionnalité :</h3>
				<iframe frameborder="0" allowtransparency="true" title="Sondage" src="http://sondage.io/1065/Quelle-fonctionnalite-ajouter-en-premier-a-SpawnKill" ></iframe>
			</div>
		</section>
		<section class="col-lg-7 col-md-8">
			<h1>JVC SpawnKill</h1>
			<h2>Les fonctionnalités</h2>

			<div class="feature" >
				<h3>Avatars et autres infos</h3>
				<p>
					Affiche les avatars des membres à gauche des posts ainsi que leur rangs et leur sexe. Ajoute aussi des boutons pour envoyer un MP ou copier le lien permanent.
				</p>
				<div data-toggle="tooltip" class="feature-img" title="Exemple d'avatar" >
					<img src="img/avatar.png" /> 
				</div>
			</div>

			<div class="feature" >
				<h3>Citations</h3>
				<p>
					Permet de citer un message de manière propre simplement en cliquant sur un bouton "citer".
				</p>
				<br />
				<div data-toggle="tooltip" class="feature-img" title="Cadre de citation" >
					<img src="img/citation.png" />
				</div>
			</div>

			<div class="feature" >
				<h3>Réponse Rapide</h3>
				<p>
					Permet de répondre à un topic sans avoir à cliquer sur "Répondre". le formulaire de réponse est présent sur toutes les pages.
				</p>
				<div data-toggle="tooltip" class="feature-img" title="Formulaire de réponse rapide" >
					<img src="img/quick-response.png" />
				</div>
			</div>

			<div class="feature" >
				<h3>Mise en avant des nouveaux topics</h3>
				<p>
					Permet de voir facilement les nouveaux topics dans la liste des sujets
				</p>
				<div data-toggle="tooltip" class="feature-img" title="Nouveau topic" >
					<img src="img/nouveau-topic.png" />
				</div>
			</div>

			<div class="feature" >
				<h3>Accès rapide à la dernière page d'un topic</h3>
				<p>
					Ce module ajoute un lien sur les icônes des topics dans la liste des sujets permettant d'accéder directement à la dernière page de ce topic.
				</p>
				<div data-toggle="tooltip" class="feature-img" title="Accès à la dernière page" >
					<img src="img/last-page.png" />
				</div>
			</div>

			<div class="feature" >
				<h3>Panneau de configuration</h3>
				<p>
					Ce panneau permet de choisir et de configurer tous les modules du Script.
					Il s'ouvre à la première installation ou en cliquant sur l'engrenage en haut à droite du forum
				</p>
				<div data-toggle="tooltip" class="feature-img" title="Panneau de configuration" >
					<img src="img/config-panel.png" />
				</div>
			</div>

		</section>
	</div>

	<div id="download-box" class="box" >
		<h4><strong>Étape 1 :</strong> Installer GreaseMonkey ou TamperMonkey</h4>
		<?php if ($browser === "other" || $browser === "firefox"): ?>
			<p class="firefox icon-browser" >
				Avec Firefox : <a target="_blank" href="https://addons.mozilla.org/fr/firefox/addon/greasemonkey/" >Installer GreaseMonkey</a>
				<span class="gm-enabled glyphicon glyphicon-ok"></span>
			</p>
		<?php endif ?>
		<?php if ($browser === "other" || $browser === "chrome"): ?>
			<p class="chrome icon-browser" >
				Avec Chrome : <a target="_blank" href="https://chrome.google.com/webstore/detail/tampermonkey/dhdgffkkebhmkfjojejmpbldmpobfkfo?hl=fr" >Installer TamperMonkey</a>
				<span class="gm-enabled glyphicon glyphicon-ok"></span>
			</p>
		<?php endif; ?>
		<?php if ($browser === "other" || $browser === "opera"): ?>
			<p class="opera icon-browser" >
				Avec Opera : <a target="_blank" href="https://addons.opera.com/fr/extensions/details/tampermonkey-beta/?display=en" >Installer TamperMonkey Beta</a>
				<span class="gm-enabled glyphicon glyphicon-ok"></span>
			</p>
		<?php endif; ?>
		<br />
		<h4><strong>Étape 2 :</strong> Installer SpawnKill : 
		<a target="_blank" class="btn btn-sm btn-primary" href="http://dl.spixel.fr/greasemonkey/jvc-spawnkill/jvc-spawnkill.user.js?<?php echo "$rand"; ?>" >
			<span class="glyphicon glyphicon-download-alt"></span> Cliquer ici !
		</a>
		</h4>
	</div>
	<script type="text/javascript" src="resource://greasemonkey/addons4.js"></script>
	<script type="text/javascript">
		if (typeof GM_addonsStartup !== "undefined") {
			$(".gm-enabled").fadeIn();
		}
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-38711394-1', 'auto');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');

	</script>
</body>

</html>
