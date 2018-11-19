<?php $meta_box = get_post_custom($post->ID); $video = $meta_box['custom_meta_video'][0]; ?>
	
<?php if ( $video ) : ?>
	<div class="feature-vid"><?php echo $video; ?></div>
<?php else: ?>
    <a class="feature-img" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'feature' ); ?></a>
<?php endif; ?>

<div class="posttitle">
	<h2 class="headline"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<div class="postdate">            
	    <p><i class="icon-pencil"></i> &nbsp;<?php _e("Posted on", 'organicthemes'); ?> <?php the_time(__("F j, Y", 'organicthemes')); ?></p>
	</div>
</div>

<div class="article">
	<?php the_excerpt(); ?>
	<p><a class="more-link" href="<?php the_permalink(); ?>" rel="bookmark"><?php _e("Continue Reading", 'organicthemes'); ?></a></p>
</div>

<div class="postmeta">
	<p class="left"><i class="icon-user"></i> &nbsp;<?php _e("Posted by", 'organicthemes'); ?> <?php the_author_posts_link(); ?></p>
	<p class="right"><i class="icon-comment"></i> &nbsp;<a href="<?php the_permalink(); ?>#comments"><?php comments_number(__("Leave a Comment", 'organicthemes'), __("1 Comment", 'organicthemes'), '% Comments'); ?></a></p>
</div>