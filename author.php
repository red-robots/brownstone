<?php 
/*
 *  This template is used to display author information, when clicking on an authors name.
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
	
	    <!-- BEGIN .eight columns -->
	    <div class="eight columns">
	    
	    	<!-- BEGIN .post -->
	    	<div <?php post_class('author-page content holder'); ?> id="page-<?php the_ID(); ?>">
	    
		        <!-- BEGIN .article -->
		        <div class="article">
		    
		        <!-- This sets the $curauth variable -->
		        
		        <?php
		            if(isset($_GET['author_name'])) :
		            $curauth = get_userdatabylogin($author_name);
		            else :
		            $curauth = get_userdata(intval($author));
		            endif;
		        ?>
		        
		        <?php if(function_exists('get_avatar')) { echo get_avatar($author, '120'); } ?>
		        <h2 class="headline"><?php echo $curauth->display_name; ?></h2>
		        <p><strong><?php _e("Website:", 'organicthemes'); ?></strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
		        <p><strong><?php _e("Profile:", 'organicthemes'); ?></strong> <?php echo $curauth->user_description; ?></p>
		        <h6><?php _e("Posts by", 'organicthemes'); ?> <?php echo $curauth->display_name; ?>:</h6>
		        
		        <ul>
		        
		            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		            <li>
		                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
		            </li>
		            <?php endwhile; else: ?>
		            <p><?php _e("No posts by this author.", 'organicthemes'); ?></p>
		            <?php endif; ?>
		        
		        </ul>
		        
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