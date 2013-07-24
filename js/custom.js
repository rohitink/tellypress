
//Custom jQuery Code for basic theme operations.

jQuery(document).ready(function() {
		jQuery('.main-navigation .menu ul').superfish({
			delay:       500,                            // one second delay on mouseout
			animation:   {opacity:'show',height:'hide'},  // fade-in and slide-down animation
			speed:       'fast',                          // faster animation speed
			autoArrows:  true                            // disable generation of arrow mark-up
		});
	});
	$(document).ready( function() {
		$('#search_header input[type=search]').focusin(function(e) {
			$(this).animate( { 
				width: 200,
				left: 65 }, 1000, function() {} );
        });
		$('#search_header input[type=search]').focusout(function(e) {
			$(this).animate( { 
				width: 100,
				left: 165 }, 1000, function() {} );
        });
	}); 
