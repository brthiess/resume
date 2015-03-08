$( document ).ready(function() {
	$(".projects .website-image").hover(
				function() {	
					$(this).children(".caption").css("top", "0%");
					$(this).children(".caption-text").css("opacity", "1");
				}, function() {
					$(this).children(".caption").css("top", "-100%");
					$(this).children(".caption-text").css("opacity", "0");
				});
});