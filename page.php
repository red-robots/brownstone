<?php
/*
 * The page template for our theme.
 *
 * This template is used to display page content.
 *
 * @package Response
 * @since Response 1.0
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
	
	    <!-- BEGIN .eight columns -->
	    <div class="eight columns">
	    
	        <div <?php post_class('content holder'); ?> id="page-<?php the_ID(); ?>">
	        
	        	<div class="article">
	    
		            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		            <h1 class="headline"><?php the_title(); ?></h1>
		            
		            <?php the_content(__("Read More", 'organicthemes')); ?>
		            
		            <?php wp_link_pages(array(
		                'before' => '<p class="page-links"><span class="link-label">' . __('Pages:') . '</span>',
		                'after' => '</p>',
		                'link_before' => '<span>',
		                'link_after' => '</span>',
		                'next_or_number' => 'next_and_number',
		                'nextpagelink' => __('Next'),
		                'previouspagelink' => __('Previous'),
		                'pagelink' => '%',
		                'echo' => 1 )
		            ); ?>
		            
		            <?php if(of_get_option('display_social_page') == '1') { ?>
		            <div class="social">
		            	<div class="like-btn">
		            	  	<div class="fb-like" href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
		            	</div>
		            	<div class="pin-btn">
		            		<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image; ?>&description=<?php the_title(); ?>" class="pin-it-button" count-layout="horizontal" target="_blank"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
		            	</div>
		            	<div class="tweet-btn">
		            		<a href="http://twitter.com/share" class="twitter-share-button"
		            		data-url="<?php the_permalink(); ?>"
		            		data-via="<?php echo of_get_option('twitter_user'); ?>"
		            		data-text="<?php the_title(); ?>"
		            		data-related=""
		            		data-count="horizontal"><?php _e("Tweet", 'organicthemes'); ?></a>
		            	</div>
		            	<div class="plus-btn">
		            		<g:plusone size="medium" annotation="bubble" href="<?php the_permalink(); ?>"></g:plusone>
		            	</div>
		            </div>
		            <?php } else { ?>
		            <?php } ?>
		            
		            <?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?>
		            <div class="clear"></div>
		            
		            <?php endwhile; else: ?> 
		            <p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
					<?php endif; ?>
				
				</div>
	            
	        </div>
			
		<!-- END .eight columns -->
		</div>
		
		<div class="four columns">
        
        




        
        
			  
              

            
            
            



		</div><!-- .four columns -->
	
	<!-- END .row -->
	</div>

<!-- END #content -->
</div>
		   <div style="width: 0px; height: 0px; overflow: hidden;">
<script type="text/javascript" src="http://www.formstack.com/forms/js.php?1503241-6B1mo1FhFy-v3"></script><noscript>&lt;a href="http://www.formstack.com/forms/?1503241-6B1mo1FhFy" title="Online Form"&gt;Sign up now!&lt;/a&gt;</noscript></div>
<?php get_footer(); ?>