<?php
/*
 *
 Template Name: Guestbook
 *
 * This template is used to display a guestbook.
 *
 */ 
 get_header(); ?>
 
<?php if ( has_post_thumbnail()) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'banner'); } ?>
<?php if ( has_post_thumbnail()) { ?>
	<div class="banner" style="background-image: url(<?php if (has_post_thumbnail()) { echo $thumb[0]; } ?>);"><span class="banner-img"><?php the_post_thumbnail( 'banner' ); ?></span></div>
<?php } else { ?>
<?php } ?>
 
<!-- BEGIN #content -->
<div id="content">

	<!-- BEGIN .row -->
	<div class="row">
	
	    <!-- BEGIN .twelve columns -->
	    <div class="twelve columns">	
	    
	        <div <?php post_class('content holder full-width'); ?> id="page-<?php the_ID(); ?>">
	        
	        	<div class="article">
	    
		            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		            <h1 class="headline"><?php the_title(); ?></h1>
		            
		            <?php the_content(__("Read More", 'organicthemes')); ?>
		            <?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?>
		            <div class="clear"></div>
		            
		            <?php endwhile; else: ?> 
		            <p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
					<?php endif; ?>
				
				</div>
				
				<div class="postcomments">
					<div class="article">
						<?php comments_template('', true); ?>
					</div>
				</div><!-- .postcomments -->
	            
	        </div>
			
		<!-- END .twelve columns -->
		</div>
	
	<!-- END .row -->
	</div>

<!-- END #content -->
</div>

<?php get_footer(); ?>