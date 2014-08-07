"use strict";
$(function() {
	
	//Légendes des images
	$(".feature-img").tooltip({
		placement: "right"
	});

	//Popup de téléchargement
	$("#get-spawnkill").fancybox();
	
	if(window.location.hash.substring(1) === "download-box") {
		$("#get-spawnkill").click();		
	}

});