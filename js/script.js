/* -------------------------------------------------------------------
Main script for Neelagiri Tea
----------------------------------------------------------------------
Author: Sam@Birdinkweb.com / Indika Sampath
Version: 2.0.1.6;
Date: November 2016;
Origin: LK;
---------------------------------------------------------------------- */
$(document).ready(function() {
	// Main slider
	$(".hero-slider").owlCarousel({
 		items:1,
 		loop:true,
 		autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true,
	    margin:0,
	    nav: true,
	    navText: ['<span class="icon-chevron-thin-right"></span>','<span class="icon-chevron-thin-left"></span>'],
	    dots: false
	});

	// Mobile Navigation Slicknav
 	$('#menu').slicknav({
		prependTo:"#mobile-menu",
		allowParentLinks: true, // Allow clickable links as parent elements.
		nestedParentLinks: true // If false, parent links will be separated from the sub-menu toggle.
	});
});

