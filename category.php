<?php 
/*
 *  This page template is used to display category post indexes. 
 *
 *  @package Response 
 *  @since Response 1.0
 *
 */ 
 get_header(); ?>

<!-- BEGIN #content -->
<div id="content">

	<!-- BEGIN .row -->
	<div class="row">
	
		<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
	
		    <!-- BEGIN .eight columns -->
		    <div class="eight columns">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		        <?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
		        
		        <div <?php post_class('archive-result content holder'); ?> id="page-<?php the_ID(); ?>">
		        
		        	<?php if(!get_post_format()) { get_template_part('format', 'standard'); } else { get_template_part('format', get_post_format()); } ?>
		        
		        </div>
		
				<?php endwhile; else: ?>         
		        <p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
				<?php endif; ?>
		        
		        <div class="pagination">
		        	<?php if (function_exists("number_paginate")) { number_paginate(); } ?>
		        </div>
		
			<!-- END .eight columns -->
		    </div>
		            
		    <div class="four columns">
		        <?php get_sidebar(); ?> 
		    </div><!-- .four columns -->
		    
		<?php else : ?>
		
			<!-- BEGIN .twelve columns -->
		    <div class="twelve columns">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		        
		        <div <?php post_class('archive-result content holder'); ?> id="page-<?php the_ID(); ?>">
		        
		        	<?php if(!get_post_format()) { get_template_part('format', 'standard'); } else { get_template_part('format', get_post_format()); } ?>
		        
		        </div>
		
				<?php endwhile; else: ?>         
		        <p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
				<?php endif; ?>
		        
		        <div class="pagination">
		        	<?php if (function_exists("number_paginate")) { number_paginate(); } ?>
		        </div>
		
			<!-- END .twelve columns -->
		    </div>
			    
		<?php endif; ?>
	
	<!-- END .row -->
	</div>

<!-- END #content -->
</div>

<?php get_footer(); ?>