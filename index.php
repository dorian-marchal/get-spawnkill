<?php

	//Génération d'une chaine userscript alétaoire
	$rand = md5(uniqid(rand(), true)) . '.user.js';

	$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
	$browser = "other";
	if(strpos($user_agent, "firefox")) {
		$browser = "firefox";
	}
	else if(strpos($user_agent, "chrome") && !strpos($user_agent, "opr")) {
		$browser = "chrome";
	}
	else if(strpos($user_agent, "opr") || strpos($user_agent, "opera") || strpos($user_agent, "applewebkit")) {
		$browser = "opera";
	}
?>

<?php include "header.php"; ?>
<?php include "nav.php"; ?>
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
				Les citations sont ensuite mises en forme pour mieux ressortir du message.
			</p>
			<br />
			<div data-toggle="tooltip" class="feature-img" title="Cadre de citation texte" >
				<img src="img/citations-texte.png" />
			</div>
			<br/>
			<br/>
			<div data-toggle="tooltip" class="feature-img" title="Cadre de citation amélioré" >
				<img src="img/citations-html.png" />
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
			<h3>Intégration de contenus</h3>
			<h4>(Contributeur : <a target="_blank" href="https://github.com/Apoxx" >Apoxx</a>)</h4>
			<p>
				Remplace les liens vers du contenu par le contenu lui-même. Un bouton permet de cacher les contenus affichés<br>
				Contenu pris en compte par le module : Youtube, DailyMotion, Vimeo, Pixule, Sondage.io, Vocaroo, Images PNG/JPG/GIF.
			</p>
			<div data-toggle="tooltip" class="feature-img" title="Bouton de masquage des contenus" >
				<img src="img/media-buttons.png" />
			</div>
			<br>
			<br>
			<div data-toggle="tooltip" class="feature-img" title="Intégration d'une vidéo Vimeo" >
				<img src="img/vimeo.png" />
			</div>
		</div>

		<div class="feature" >
			<h3>Être prévenu des nouveaux posts</h3>
			<p>
				Ce module change le favicon de l'onglet pour indiquer combien de posts ont été ajoutés au topic depuis le chargement de la page.
			</p>
			<div data-toggle="tooltip" class="feature-img" title="Nouveaux posts" >
				<img src="img/nouveaux-posts.png" />
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
	<h4 class="browser chrome firefox" ><strong>Étape 1 :</strong> Installer GreaseMonkey ou TamperMonkey</h4>
	<h4 class="browser opera" ><strong>Étape 1 :</strong> Installer Download Chrome Extensions</h4>
	<p class="browser firefox icon-browser" >
		Avec Firefox : <a target="_blank" href="https://addons.mozilla.org/fr/firefox/addon/greasemonkey/" >Installer GreaseMonkey</a>
		<span class="gm-enabled glyphicon glyphicon-ok"></span>
	</p>
	<p class="browser chrome icon-browser" >
		Avec Chrome : <a target="_blank" href="https://chrome.google.com/webstore/detail/tampermonkey/dhdgffkkebhmkfjojejmpbldmpobfkfo?hl=fr" >Installer TamperMonkey</a>
		<span class="gm-enabled glyphicon glyphicon-ok"></span>
	</p>
	<div class="browser opera" >
		<p class="opera icon-browser" >
			Avec Opera : <a target="_blank" href="https://addons.opera.com/fr/extensions/details/download-chrome-extension-9/?display=en" >Installer "Download Chrome Extensions"</a>
		</p>
		<br />
		<h4><strong>Étape 2 :</strong> Installer TamperMonkey</h4>
		<p class="opera icon-browser" >
			Puis : <a target="_blank" href="https://chrome.google.com/webstore/detail/tampermonkey/dhdgffkkebhmkfjojejmpbldmpobfkfo?hl=fr" >Installer TamperMonkey</a>
			<span class="gm-enabled glyphicon glyphicon-ok"></span>
		</p>
		<br>
		<h4><strong>Étape 3 :</strong> Activer TamperMonkey</h4>
		<p class="opera icon-browser" >
			Appuyer sur Ctrl + Shift + E puis cliquer sur "Activer"
			<br>
			<img src="img/enable-tampermonkey.png" title="Cliquer sur 'Activer'" />
		</p>
		<div>
			<br>
			<h4><strong>Étape 4 :</strong> Installer SpawnKill : 
			<a target="_blank" class="btn btn-sm btn-success" href="https://github.com/dorian-marchal/spawnkill/raw/master/jvc-spawnkill.user.js?nocache&<?php echo "$rand"; ?>" >
				<span class="glyphicon glyphicon-download-alt"></span> Cliquer ici !
			</a>
			</h4>
			<p class="opera icon-browser" >Puis cliquer sur "Installer" :</p>
			<img src="img/install-tampermonkey.png" title="Cliquer sur 'Installer'" />
		</div>
	</div>
	<br />
	<div class="browser firefox" >
		<h4><strong>Étape 2 :</strong> Installer SpawnKill : 
		<a target="_blank" class="btn btn-sm btn-success" href="https://github.com/dorian-marchal/spawnkill/raw/master/jvc-spawnkill.user.js?nocache&<?php echo "$rand"; ?>" >
			<span class="glyphicon glyphicon-download-alt"></span> Cliquer ici !
		</a>
		</h4>
		<p class="firefox icon-browser" >Puis cliquer sur "Installer" :</p>
		<img src="img/install-greasemonkey.png" title="Cliquer sur 'Installer'" />
	</div>
	<div class="browser chrome" >
		<h4><strong>Étape 2 :</strong> Installer SpawnKill : 
		<a target="_blank" class="btn btn-sm btn-success" href="https://github.com/dorian-marchal/spawnkill/raw/master/jvc-spawnkill.user.js?nocache&<?php echo "$rand"; ?>" >
			<span class="glyphicon glyphicon-download-alt"></span> Cliquer ici !
		</a>
		</h4>
		<p class="chrome icon-browser" >Puis cliquer sur "Installer" :</p>
		<img src="img/install-tampermonkey.png" title="Cliquer sur 'Installer'" />
	</div>
	<script type="text/javascript" src="resource://greasemonkey/addons4.js"></script>
	<script type="text/javascript">
		var browser = "<?php echo $browser; ?>";
		if (typeof GM_addonsStartup !== "undefined") {
			$(".gm-enabled").fadeIn();
		}
	</script>
<?php include "footer.php"; ?>
