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

	//Aide d'installation
	$(document).on("click", ".help", function() {
		$("." + $(this).attr("data-help")).slideDown();
	});

	$(".browser:not(." + browser + ")").remove();
});