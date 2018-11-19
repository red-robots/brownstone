<?php get_header(); ?>

<!-- BEGIN #content -->
<div id="content">

	<!-- BEGIN .row -->
	<div class="row">
	
	    <!-- BEGIN .eight columns -->
	    <div class="eight columns">
	    	
	    	<div class="page content holder">
	    
		        <!-- BEGIN .article -->
		        <div class="article">
		                
		            <h1 class="headline"><?php _e("Not Found, Error 404", 'organicthemes'); ?></h1>
		            <p><?php _e("The page you are looking for no longer exists or cannot be found.", 'organicthemes'); ?></p>
		        
		        <!-- END .article -->
		        </div>
	        
	        <!-- END .post -->
	        </div>
	        
	    <!-- END .eight columns -->
	    </div>
	            
	    <div class="four columns">
	        <?php get_sidebar(); ?> 
	    </div><!-- .four columns -->
	
	<!-- END .row -->
	</div>

<!-- END #content -->
</div>

<?php get_footer(); ?>