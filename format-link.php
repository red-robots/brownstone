<div class="posttitle">
	<h2 class="headline"><i class="icon-link"></i><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?> &rarr; </a></h2>
</div>

<?php if ( !empty( $post->post_excerpt ) ) { ?>
	<div class="article">
    	<?php the_excerpt(); ?>	
    </div>
<?php } else { } ?>