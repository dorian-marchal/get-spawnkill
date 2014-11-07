"use strict";

$(function() {

	//Légendes des images
	$(".feature-img").tooltip({
		placement: "right",
		animation: false,
	});

	$(".navbar [data-toggle='tooltip']").tooltip({
		animation: false,
		trigger: "hover",
	});

	//Popup de téléchargement
	$("#download-button a").fancybox();

	if(window.location.hash.substring(1) === "download-box" ||
		window.location.hash.substring(1) === "download") {
		$("#download-button a").click();
	}

	//Aide d'installation
	$(document).on("click", ".help", function() {

		if(!$("." + $(this).attr("data-help")).is(":visible")) {
			$("." + $(this).attr("data-help")).fadeIn();
		}
		else {
			$("." + $(this).attr("data-help")).hide();
		}
		$.fancybox.update();
	});

	$(".browser:not(." + browser + ")").remove();
});