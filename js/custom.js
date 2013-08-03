
//Custom jQuery Code for basic theme operations.

jQuery(document).ready(function() {
		jQuery('.main-navigation .menu ul').superfish({
			delay:       1000,                            // 1 second avoids dropdown from suddenly disappearing
			animation:   {opacity:'show',height:'hide'},  // fade-in and slide-down animation
			speed:       'fast',                          // faster animation speed
			autoArrows:  false                           // disable generation of arrow mark-up
		});
	});
	jQuery(document).ready( function() {
		jQuery('#search_header input[type=search]').focusin(function(e) {
			jQuery(this).animate( { 
				width: 200,
				left: 65 }, 1000, function() {} );
        });
		jQuery('#search_header input[type=search]').focusout(function(e) {
			jQuery(this).animate( { 
				width: 100,
				left: 165 }, 1000, function() {} );
        });
	}); 
