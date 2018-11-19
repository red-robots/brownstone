<?php
/*
 *
 Template Name: Portfolio
 *
 * This template is used to display a portfolio page.
 *
 */ 
 get_header(); ?>

<!-- BEGIN .row -->
<div class="row">
	    
	<!-- BEGIN #portfolio -->
    <div id="portfolio">
	
		<?php global $paged; ?>
		<?php $wp_query = new WP_Query(array('cat'=>of_get_option('category_portfolio'),'posts_per_page'=>of_get_option('postnumber_portfolio'),'paged'=>$paged)); ?>
		<?php $post_class = 'first'; ?>
        <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
        <?php global $more; $more = 0; ?>
        
        <!-- BEGIN .three columns -->
        <div class="three columns <?php echo $post_class; ?>">
        
        	<div <?php post_class('content holder portfolio-post'); ?>>
        
        	<?php if ('first' == $post_class) {
        	      $post_class = 'second';
        	    } elseif ('second' == $post_class) {
        	      $post_class = 'third';
        	    } elseif ('third' == $post_class) {
        	      $post_class = 'fourth';
        	    } else {
        	      $post_class = 'first';
        	} ?>
	        
        	<?php if ( $video ) : ?>
        		<div class="feature-vid"><?php echo $video; ?></div>
        	<?php else: ?>
        		<?php if ( has_post_thumbnail()) { ?>
        	    	<a class="feature-img" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'feature' ); ?></a>
        	    <?php } else { } ?>
        	<?php endif; ?>
	        
	        <?php if ( empty( $post->post_excerpt )) { ?>
	        <?php } else { ?>
		        <div class="article">
		        	<h2 class="title text-center"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		        	<?php the_excerpt(); ?>
		        </div>
	        <?php } ?>
	        
	        </div>
	        
        <!-- END .three columns -->
        </div>        
            
        <?php endwhile; ?>
        <?php else : ?>
		<?php endif; ?>
		
		<div class="pagination">
			<?php if (function_exists("number_paginate")) { number_paginate(); } ?>
		</div>
	
	<!-- END #portfolio -->
	</div>
	
<!-- END .row -->
</div>

<?php get_footer(); ?>