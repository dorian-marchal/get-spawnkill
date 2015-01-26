<div id="download-box" class="box" >
	<h4 class="browser chrome firefox" ><strong>Étape 1 :</strong> Installer GreaseMonkey ou TamperMonkey</h4>
	<h4 class="browser opera" ><strong>Étape 1 :</strong> Installer Download Chrome Extensions</h4>
	<p class="browser firefox icon-browser" >
		<a target="_blank" href="https://addons.mozilla.org/fr/firefox/addon/greasemonkey/" >Installer GreaseMonkey</a>
		<span class="gm-enabled glyphicon glyphicon-ok"></span>
	</p>
	<p class="browser chrome icon-browser" >
		<a target="_blank" href="https://chrome.google.com/webstore/detail/tampermonkey/dhdgffkkebhmkfjojejmpbldmpobfkfo?hl=fr" >Installer TamperMonkey</a>
		<span class="gm-enabled glyphicon glyphicon-ok"></span>
	</p>

	<div class="browser opera" >
		<p class="opera icon-browser" >
			<a target="_blank" href="https://addons.opera.com/fr/extensions/details/download-chrome-extension-9/?display=en" >Installer "Download Chrome Extensions"</a>
		</p>
		<br />
		<h4>
			<strong>Étape 2 :</strong> Installer TamperMonkey
		</h4>
		<p class="opera icon-browser" >
			&#10137; <a target="_blank" href="https://chrome.google.com/webstore/detail/tampermonkey/dhdgffkkebhmkfjojejmpbldmpobfkfo?hl=fr" >Installer TamperMonkey</a>
			<span class="gm-enabled glyphicon glyphicon-ok"></span>
		</p>
		<br>
		<h4><strong>Étape 3 :</strong> Activer TamperMonkey</h4>
		<p class="opera icon-browser" >
			Appuyer sur <code>Ctrl + Shift + E</code> puis cliquer sur "Activer" <img data-help="h1" src="img/help.png" title="Afficher une image d'aide" class="help" />
			<br>
			<img class="h1 screen" src="img/enable-tampermonkey.png" title="Cliquer sur 'Activer'" />
		</p>
		<div>
			<br>
			<h4><strong>Étape 4 :</strong> Installer SpawnKill :
			<a target="_blank" class="btn  btn-success" href="https://github.com/dorian-marchal/spawnkill/raw/master/jvc-spawnkill.user.js?nocache&<?php echo "$rand"; ?>" >
				<span class="glyphicon glyphicon-download-alt"></span> Cliquer ici !
			</a>
			</h4>
			<p class="opera icon-browser" >
				Puis cliquer sur "Installer" <img data-help="h2" src="img/help.png" title="Afficher une image d'aide" class="help" />
			</p>
			<img class="h2 screen" src="img/install-tampermonkey.png" title="Cliquer sur 'Installer'" />
		</div>
	</div>

	<br />

	<div class="browser firefox" >
		<h4><strong>Étape 2 :</strong> Installer SpawnKill :
		<a target="_blank" class="btn  btn-success" href="https://github.com/dorian-marchal/spawnkill/raw/master/jvc-spawnkill.user.js?nocache&<?php echo "$rand"; ?>" >
			<span class="glyphicon glyphicon-download-alt"></span> Cliquer ici !
		</a>
		</h4>
		<p class="firefox icon-browser" >Puis cliquer sur "Installer"  <img data-help="h3" src="img/help.png" title="Afficher une image d'aide" class="help" /></p>
		<img class="h3 screen" src="img/install-greasemonkey.png" title="Cliquer sur 'Installer'" />
	</div>

	<div class="browser chrome" >
		<h4><strong>Étape 2 :</strong> Installer SpawnKill :
		<a target="_blank" class="btn  btn-success" href="https://github.com/dorian-marchal/spawnkill/raw/master/jvc-spawnkill.user.js?nocache&<?php echo "$rand"; ?>" >
			<span class="glyphicon glyphicon-download-alt"></span> Cliquer ici !
		</a>
		</h4>
		<p class="chrome icon-browser" >Puis cliquer sur "Installer"  <img data-help="h4" src="img/help.png" title="Afficher une image d'aide" class="help" /></p>
		<img class="h4 screen" src="img/install-tampermonkey.png" title="Cliquer sur 'Installer'" />
	</div>
	<script type="text/javascript" src="resource://greasemonkey/addons4.js"></script>
	<script type="text/javascript">
		var browser = "<?php echo $browser; ?>";
		if (typeof GM_addonsStartup !== "undefined") {
			$(".gm-enabled").fadeIn();
		}
	</script>
	<form target="_blank" style="display: none;" class="donation-download-form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	    <input name="cmd" value="_donations" type="hidden">
	    <input name="business" value="LHTF3GZ496X8U" type="hidden">
	    <input name="lc" value="FR" type="hidden">
	    <input name="item_name" value="Dorian Marchal" type="hidden">
	    <input name="amount" value="2.00" type="hidden">
	    <input name="currency_code" value="EUR" type="hidden">
	    <input name="bn" value="PP-DonationsBF:1408178230-capture-du-2014-08-16-10-33-38.jpg:NonHostedGuest" type="hidden">
	</form>
    <a class="donation-download-button btn btn-warning btn-lg" onclick="$('.donation-download-form').submit();" href="#" title="Faire un don de 2€ à Spixel_">
    	<span class="glyphicon glyphicon-heart-empty"></span> Payer une bière à l'auteur
    </a>
</div>
