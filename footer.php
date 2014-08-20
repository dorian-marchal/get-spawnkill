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
	</div>
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
