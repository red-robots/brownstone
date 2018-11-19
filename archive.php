<?php 
/*
 *  This template is used to display archive posts, e.g. tag post indexes. 
 *  This template is also the fallback template to 'category.php'. 
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
		            
			        <!-- BEGIN .article -->
			        <div class="article">
					
						<h2 class="headline"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				            
						<?php if ( $video ) : ?>
				            <div class="feature-vid"><?php echo $video; ?></div>
				        <?php else: ?>
				        	<?php if ( has_post_thumbnail()) { ?>
				            	<a class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail( 'feature' ); ?></a>
				            <?php } else { } ?>
				        <?php endif; ?>
				
				        <?php the_excerpt(); ?>
				        <div class="clear"></div>   
					
					<!-- END .article -->
					</div>
					
					<div class="postmeta">
						<p class="left"><i class="icon-reorder"></i> &nbsp;<?php _e("Category:", 'organicthemes'); ?> <?php the_category(', '); ?></p> 
						<?php if ( has_tag() ) { ?>
							<p class="right"><i class="icon-tags"></i> &nbsp;<?php _e("Tags:", 'organicthemes'); ?> <?php the_tags(''); ?></p>
						<?php } else { } ?>
					</div>
				
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
    	        <?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
    	        
    	        <div <?php post_class('archive-result content holder'); ?> id="page-<?php the_ID(); ?>">
    	            
    		        <!-- BEGIN .article -->
    		        <div class="article">
    				
    					<h2 class="headline"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    			            
    					<?php if ( $video ) : ?>
    			            <div class="feature-vid"><?php echo $video; ?></div>
    			        <?php else: ?>
    			            <?php if ( has_post_thumbnail()) { ?>
    			            	<a class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail( 'feature' ); ?></a>
    			            <?php } else { } ?>
    			        <?php endif; ?>
    			
    			        <?php the_excerpt(); ?>
    			        <div class="clear"></div>   
    				
    				<!-- END .article -->
    				</div>
    				
    				<div class="postmeta">
    					<p class="left"><i class="icon-reorder"></i> &nbsp;<?php _e("Category:", 'organicthemes'); ?> <?php the_category(', '); ?></p> 
    					<?php if ( has_tag() ) { ?>
    						<p class="right"><i class="icon-tags"></i> &nbsp;<?php _e("Tags:", 'organicthemes'); ?> <?php the_tags(''); ?></p>
    					<?php } else { } ?>
    				</div>
    			
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