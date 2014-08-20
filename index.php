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
			<a href="https://github.com/dorian-marchal/spawnkill#spawnkill---guide-de-d%C3%A9veloppement" target="_blank" id="to-github" class="btn btn-default" >
				<span class="glyphicon glyphicon-link"></span> Contribuer
			</a>
		</div>
		<div id="sondage" >
			<h3>Voter pour la prochaine fonctionnalité :</h3>
			<iframe frameborder="0" allowtransparency="true" title="Sondage" src="http://sondage.io/1065/Quelle-fonctionnalite-ajouter-en-premier-a-SpawnKill" ></iframe>
		</div>
	</section>
	<section class="col-lg-7 col-md-8">
		<h1>Les fonctionnalités</h1>

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

<?php include "footer.php"; ?>
