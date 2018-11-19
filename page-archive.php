<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<!-- BEGIN .row -->
<div class="row">

    <!-- BEGIN .eight columns -->
    <div class="eight columns">	
    
        <div class="type-page" id="page-<?php the_ID(); ?>">

			<div class="article">
			
	            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	            <h1 class="headline"><?php the_title(); ?></h1>
	            
	            <?php the_content(__("Read More", 'organicthemes'));?>
				
				<div class="archive-column">
					<h6><?php _e("By Page:", 'organicthemes'); ?></h6>
					<ul><?php wp_list_pages('title_li='); ?></ul>
				
					<h6><?php _e("By Month:", 'organicthemes'); ?></h6>
					<ul><?php wp_get_archives('type=monthly'); ?></ul>
							
					<h6><?php _e("By Category:", 'organicthemes'); ?></h6>
					<ul><?php wp_list_categories('sort_column=name&title_li='); ?></ul>
				</div>
				
				<div class="archive-column">
					<h6><?php _e("By Post:", 'organicthemes'); ?></h6>
					<ul><?php wp_get_archives('type=postbypost&limit=100'); ?></ul>
				</div>
				
				<?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?>
				<div class="clear"></div>
				<?php endwhile; else: ?> 
				<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
				<?php endif; ?>
			
			<!-- END .article columns -->
			</div>
		
		<!-- END .holder columns -->           
        </div>
		
	<!-- END .eight columns -->
	</div>
	
	<div class="four columns">
	    <?php get_sidebar(); ?> 
	</div><!-- .four columns -->

<!-- END .row -->
</div>

<?php get_footer(); ?>