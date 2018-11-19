<?php
/*
 * The single post template for our theme.
 *
 * Displays content when viewing a single post. Used in place of single.php.
 *
 * @package Response
 * @since Response 1.0
 * 
 */ 
 get_header(); ?>

<!-- BEGIN #content -->
<div id="content">

	<!-- BEGIN .row -->
	<div class="row">
	
	    <!-- BEGIN .eight columns -->
	    <div class="eight columns">
	
			<div <?php post_class('content holder'); ?> id="page-<?php the_ID(); ?>">
	
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
				
				<?php if (has_post_format('gallery')) { ?>
				
					<div class="slideshow">        
						<div class="flexslider">
							<ul class="slides">
							
								<?php $data = array(
									'post_parent'		=> $id,
									'post_type' 		=> 'attachment',
									'post_mime_type' 	=> 'image',
									'order'         	=> 'ASC',
									'orderby'	 		=> 'menu_order',
								    'numberposts' 		=> -1
								); ?>
								
								<?php 
								$images = get_posts($data); foreach( $images as $image ) { 
									$imageurl = wp_get_attachment_url($image->ID);
									echo '<li><img src="'.$imageurl.'" /></li>' . "\n";
								} ?>
					
							</ul>
						</div>
					</div>
					
				<?php } else { } ?>
				
				
				<div class="article">
		
					<h1 class="headline"><?php the_title(); ?></h1>
	
	                <div class="postauthor">            
	                    <p class="left"><i class="icon-user"></i> &nbsp;<?php _e("Posted by", 'organicthemes'); ?> <?php the_author_posts_link(); ?> <?php _e("on", 'organicthemes'); ?> <?php the_time(__("F j, Y", 'organicthemes')); ?></p>
	                    <p class="right"><i class="icon-comment"></i> &nbsp;<a class="scroll" href="<?php the_permalink(); ?>#comments"><?php comments_number(__("Leave a Comment", 'organicthemes'), __("1 Comment", 'organicthemes'), '% Comments'); ?></a></p>
	                </div>
	                
	                <?php if(of_get_option('display_feature_post') == '1') { ?>
		                <?php if ( $video ) : ?>
		                	<div class="feature-vid"><?php echo $video; ?></div>
		                <?php else: ?>
		                	<?php if ( has_post_thumbnail()) { ?>
		                    	<div class="feature-img" style="background-color: <?php echo get_post_meta(get_the_ID(), 'bg_color', true); ?>;">
		                    		<?php the_post_thumbnail( 'feature' ); ?>
		                    	</div>
		                    <?php } else { } ?>
		                <?php endif; ?>
	                <?php } else { ?>
	                <?php } ?>
		
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
					
					<?php if(of_get_option('display_social_post') == '1') { ?>
					<div class="social">
						<div class="like-btn">
						  	<div class="fb-like" href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
						</div>
						<div class="pin-btn">
							<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $feat_image; ?>&description=<?php the_title(); ?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" target="_blank" /></a>
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
					<?php trackback_rdf(); ?>
				
				<!-- END .article columns -->
				</div>
				
				<div class="postmeta">
					<p class="left"><i class="icon-reorder"></i> &nbsp;<?php _e("Category:", 'organicthemes'); ?> <?php the_category(', '); ?></p> 
					<?php if ( has_tag() ) { ?>
						<p class="right"><i class="icon-tags"></i> &nbsp;<?php _e("Tags:", 'organicthemes'); ?> <?php the_tags(''); ?></p>
					<?php } else { } ?>
				</div>
				
				<div class="postcomments">
					<div class="article">
						<?php comments_template('', true); ?>
					</div>
				</div><!-- .postcomments -->
			
			<!-- END .post columns -->
			</div>
	
			<?php endwhile; else: ?>
			<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
			<?php endif; ?>
	
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