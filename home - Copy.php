<?php get_header(); ?>



<?php if ( '1' == of_get_option('display_slideshow')) { ?>

	

	<!-- BEGIN .slideshow -->

    <div class="slideshow featured-slideshow">

    

    	<!-- BEGIN .row -->

    	<div class="row">

    		

    		<!-- BEGIN .twelve columns -->

    	    <div class="twelve columns">

    <!-- BEGIN #content -->   
<div id="content">
<!-- BEGIN home video -->



		       <div id="bw-home-video">

               

               

            





	<!-- BEGIN .row -->

	<div class="row">

		    

	    <div id="homepage">

	    

	    	<div class="twelve columns">

	    	

				<?php $wp_query = new WP_Query('page_id='.of_get_option('select_page')); while($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<?php global $more; $more = 0; ?>



				<div class="article">

<!-- video -->
<div id="home-video" style="float: left; width: 100%; margin-bottom: 20px;">

<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="100%" height="350"
      poster="<?php echo get_template_directory_uri(); ?>/video/poster.png"
      data-setup="{}">
    <source src="http://brownstonerecovery.com/brownstone/wp-content/uploads/2015/07/REDC_2015_V3_HD.mp4" type='video/mp4' />
    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video>


</div>


<!-- / video -->	

			

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



				</div>

				

				<?php endwhile; ?>

			

			</div>

		

		<!-- END #homepage -->

		</div>

		

	<!-- END .row -->

	</div>



<!-- END #content -->

</div>

               

               

               

               </div>

		            

		        <!-- END home video -->		      

              



	        </div>

            

        <!-- END .row -->

        </div>

    

    <!-- END .slideshow -->

    </div>

	    

<?php } else { ?>

<?php } ?>



<?php if ( '1' == of_get_option('display_home')) { ?>







<?php } else { } // display no featured page ?>



<div id="bw-row2">

<div id="bw-row2-header">Quick Links</div>



<div class="bw-row2-box1">

  <h2><img src="<?php bloginfo('template_url'); ?>/images/square.jpg" /> Do I Qualify?</h2>

  <div class="bw-row2-bo2text">If you accepted Visa or MasterCard between January 1, 2004, and November 28, 2012, you are part of a $7 billion dollar settlement...

  

    <div class="bw-more"><a href="process-for-getting-you-more/">More ></a></div>

  

  </div></div>



<div class="bw-row2-box2">

  <h2><img src="<?php bloginfo('template_url'); ?>/images/square.jpg" /> Why Brownstone</h2>

  <div class="bw-row2-bo2text">Brownstone experts have decades of experience in settlement recovery, with
special expertise in cases involving payment and interchange. Brownstone staff...

  

  <div class="bw-more"><a href="why-work-with-brg/">More ></a></div></div></div>



<div class="bw-row2-box2">

  <h2><img src="<?php bloginfo('template_url'); ?>/images/square.jpg" /> Suit Overview</h2>

  <div class="bw-row2-bo2text">It’s the largest private anti-trust settlement in history — a more than $7 billion deal. What was it all about? 

  

    <div class="bw-more"><a href="about-the-case/">More ></a></div></div></div>



<div class="bw-row2-box3">

  <h2><img src="<?php bloginfo('template_url'); ?>/images/square.jpg" /> How the Process Works</h2>

  <div class="bw-row2-bo2text">An insider’s guide to the claims process: Filing a claim, dealing with the claims administrator, and how the estimation process will work...

  

  <div class="bw-more"><a href="the-process/">More ></a></div></div></div>



</div>





<div id="bw-footer"><?php get_footer(); ?></div>