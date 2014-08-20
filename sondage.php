<?php $page = "sondage"; ?>
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
<?php include "fixed-box.php"; ?>

	<section class="col-lg-7 col-md-8">
		<h1>Voter pour la prochaine fonctionnalité !</h1>
		<div id="sondage" >
			<iframe frameborder="0" allowtransparency="true" title="Sondage" src="http://sondage.io/1065/Quelle-fonctionnalite-ajouter-en-premier-a-SpawnKill" ></iframe>
		</div>
	</section>
</div>

<?php include "footer.php"; ?>
