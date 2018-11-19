jQuery(document).ready(function() {
    
    /* Superfish Menu Drop Downs ---------------------*/
    jQuery('.menu').superfish({
    	delay			: 200,
    	animation		: {opacity:'show'},
    	speed			: 'fast',
    	autoArrows		: true,
    	dropShadows		: false
    });
    
    /* Mobile Menu ---------------------*/
    jQuery('#sec-selector').change(function(){
        if (jQuery(this).val()!='') {
        	window.location.href=jQuery(this).val();
        }
    });
        
    /* Flexslider ---------------------*/
    jQuery(window).load(function() { 
	    if( jQuery().flexslider ) {
	    	var slider = jQuery('.flexslider');
	    	
	    	slider.fitVids().flexslider({
		    	slideshowSpeed		: slider.attr('data-speed'),
		    	animationDuration	: 400,
		    	animation			: 'slide',
		    	video				: true,
		    	useCSS				: false,
		    	prevText			: '<i class="icon-chevron-left"></i>',
		    	nextText			: '<i class="icon-chevron-right"></i>',
		    	touch				: false,
		    	animationLoop		: true,
		    	smoothHeight		: true,
		    	
		    	start: function(slider) {
		    	    slider.removeClass('loading');
		    	}
	    	});	
	    }
    });
    
    /* Smooth Scroll Links ---------------------*/
    jQuery(document).ready(function($) {
	    jQuery('.scroll').click(function(event){		
	    	event.preventDefault();
	    	jQuery('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
	    });
    });
    
    /* Load Social Buttons In Ajax Loaded Content ---------------------*/
    jQuery(document).ajaxComplete(function() {
    	gapi.plusone.go();
    	twttr.widgets.load();
    	try {
    		FB.XFBML.parse();
    	}catch(ex){}
    });
    
    /* Fit Vids ---------------------*/
    jQuery('.feature-vid').fitVids();
    
    /* jQuery UI Tabs ---------------------*/
    jQuery(function() {
       jQuery( ".organic-tabs" ).tabs();
    });
    
    /* jQuery UI Accordion ---------------------*/
    jQuery(function() {
        jQuery( ".organic-accordion" ).accordion({
        	collapsible: true, 
            autoHeight: false
        });
    });
    
	/* Close Message Box ---------------------*/
    jQuery('.organic-box a.close').click(function() {
    	jQuery(this).parent().stop().fadeOut('slow', function() {
    	});
    });
    
	/* Toggle Box ---------------------*/
    jQuery('.toggle-trigger').click(function() {
    	jQuery(this).toggleClass("active").next().fadeToggle("slow");
    });
    
    /* Pretty Photo Lightbox ---------------------*/
    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
    
});