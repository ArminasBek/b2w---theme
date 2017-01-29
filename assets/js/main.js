$(function(){
	// Cache the window oblejct
	var $window = $(window); 

	//Parallax background effect
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning obj

		$(window).scroll(function(){
			//scroll the background at var speed
			//the yPos is a negative value because we're scrolling it up.

			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			var coords = '50%' + yPos + 'px'

			$bgobj.css({backgroundPosition: coords})
		})
	});
})