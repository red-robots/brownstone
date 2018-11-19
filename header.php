<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<?php if(of_get_option('enable_responsive') == '1') { ?>
<!-- Mobile View -->
<meta name="viewport" content="width=device-width">
<?php } else { ?>
<?php } ?>
<meta name="google-site-verification" content="3fSFG_tWqDiagZ0IrjOY-dMWG3auZWgZNGsp9tZqSNw" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link rel="Shortcut Icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-mobile.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/organic-shortcodes.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pretty-photo.css">
<?php get_template_part( 'style', 'options' ); ?>

<!--[if gte IE 8]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-ie8.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/organic-shortcodes-ie8.css">
<![endif]-->

<!-- Icon Styles -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-icons.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>

<!-- Social -->
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,300,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>



<!-- video -->
  <!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="<?php echo get_template_directory_uri(); ?>/video/video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="<?php echo get_template_directory_uri(); ?>/video/video.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "<?php echo get_template_directory_uri(); ?>/video/video-js.swf";
  </script>


<!-- video -->
</head>

<body <?php if(function_exists('body_class')) body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=246727095428680";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
    
<div class="container">
    
    <div id="header">
    	<div class="row">
    	
    		<div class="five columns">
    		
	    		<?php if ( is_home() || is_front_page() ) { ?>
	    			<?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) { ?>
		    			<h1 id="custom-header"><a href="<?php echo get_option('home'); ?>/" title="Home"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" /><?php bloginfo( 'name' ); ?></a></h1>
	    			<?php } else { ?>
	    				<div id="masthead">
		    				<h1 class="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
		    				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	    				</div>
	    			<?php } ?>
	    		<?php } else { ?>
	    			<?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) { ?>
		    			<p id="custom-header"><a href="<?php echo get_option('home'); ?>/" title="Home"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" /><?php bloginfo( 'name' ); ?></a></p>
	    			<?php } else { ?>
	    				<div id="masthead">
	    					<h4 class="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h4>
	    					<h5 class="site-description"><?php bloginfo( 'description' ); ?></h5>
	    				</div>
	    			<?php } ?>
	    		<?php } ?>
	    		
    		</div>
    		
    		<div class="seven columns">
      
      
      <!-- registration signup box --> <div id="bw-reg-box-wrapper"><div id="bw-reg-box"><a href="<?php bloginfo('url'); ?>/register-temp">Stay updated with Brownstone Recovery</a></div> 
      
     <div id="bw-reg-box-text">Call Today (877) 202-2454 </div>
</div>      
      <!-- registration signup box -->  
       
         
       <!-- search box -->     <div id="bw-search"><form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input type="submit" id="searchsubmit" value="Go" class="btn" style="float: right;" /><input type="text" size="put_a_size_here" name="s" id="bwsearch" value="Search Site" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;"/>

</div>
</form></div>  <!-- search box -->  






	    		
    			
    		
    		</div>
            
            
<nav id="navigation">
    				<?php wp_nav_menu( array( 
    					'theme_location' => 'header-menu', 
    					'title_li' => '', 
    					'depth' => 4, 
    					'container_class' => 'menu' 
    					)
    				); ?>
    			</nav>
    			
    			<nav id="navigation-mobile">
    				<?php wp_nav_menu( array( 
						'theme_location' => 'header-menu',
						'walker'         => new Walker_Nav_Menu_Dropdown(),
						'items_wrap'     => '<select id="sec-selector" name="sec-selector">%3$s</select>' 
    					) 
    				); ?>
    			</nav>            
            
            
    		
    	</div>
    </div>