<?php
	$base_url = "http://www.spawnkill.fr/";

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
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	<title>JVC SpawnKill</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css?1">
	<link rel="stylesheet" href="fancybox/jquery.fancybox.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="fancybox/jquery.fancybox.js"></script>
	<script src="js/script.js?1"></script>
</head>

<body>
	<div class="container" id="container" >