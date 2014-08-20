"use strict";

$(function() {
	
	//Légendes des images
	$(".feature-img").tooltip({
		placement: "right"
	});

	//Popup de téléchargement
	$("#download-button a").fancybox();
	
	if(window.location.hash.substring(1) === "download-box") {
		$("#download-button a").click();		
	}

	$(".browser:not(." + browser + ")").remove();
});