<style type="text/css" media="screen">
<?php 
	$background_stretch = of_get_option('background_stretch');
	$site_width = of_get_option('site_width');
	$slideshow_height = of_get_option('slideshow_height'); 
	$nav_hover = of_get_option('nav_hover'); 
	$link_color = of_get_option('link_color'); 
	$link_hover_color = of_get_option('link_hover_color');
	$highlight_color = of_get_option('highlight_color'); 
?>

body {
<?php 
	if ($background_stretch == '1') {
	    echo '-webkit-background-size: cover;';
	    echo '-moz-background-size: cover;';
	    echo '-o-background-size: cover;';
	    echo 'background-size: cover;';
    }; 
?>
}

.row, 
.featured-slideshow .slide-holder, 
.featured-slideshow .slide-info {
<?php 
	if ($site_width) {
	    echo 'max-width: ' .$site_width. ';';
    }; 
?>
}

.featured-slideshow .flexslider .slides > li, 
.featured-slideshow .slide-info,
.slideshow .loading {
<?php 
	if ($slideshow_height) {
	    echo 'min-height: ' .$slideshow_height. ';';
    }; 
?>
}

.menu a:focus, .menu a:hover, .menu a:active,
.menu li.sfHover:hover, .menu li.sfHover:hover li, .menu li li,
#navigation .menu .current_page_item .sub-menu a,
#navigation .menu .current_page_ancestor .sub-menu a,
#navigation .menu .current-menu-item .sub-menu a,
#navigation .menu .current-cat .sub-menu a,
#navigation .menu .current-menu-ancestor .sub-menu a {
<?php 
	if ($nav_hover) {
	    echo 'background-color: ' .$nav_hover. ';';
    }; 
?>
}

.container a, .container a:link, .container a:visited {
<?php 
	if ($link_color) {
	    echo 'color: ' .$link_color. ';';
    }; 
?>
}

.sidebar ul.menu li a, .sidebar ul.menu li a:visited, .sidebar ul.menu li a:link {
<?php 
	if ($link_color) {
	    echo 'color: ' .$link_color. ' !important;';
    }; 
?>
}

.container a:hover, .container a:focus, .container a:active {
<?php 
	if ($link_hover_color) {
	    echo 'color: ' .$link_hover_color. ';';
    }; 
?>
}

h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover,
.sidebar ul.menu li a:hover, .sidebar ul.menu li a:active, .sidebar ul.menu li a:focus,
.sidebar ul.menu .current_page_item a, .sidebar ul.menu .current-menu-item a,
.archive-result.format-link .headline a:hover {
<?php 
	if ($link_hover_color) {
	    echo 'color: ' .$link_hover_color. ' !important;';
    }; 
?>
}

.btn:hover, .reply a:hover, #searchsubmit:hover, #prevLink a:hover, #nextLink a:hover, .more-link:hover,
#submit:hover, #comments #respond input#submit:hover, #load-posts a:hover, .gallery img:hover, 
.container .gform_wrapper input.button:hover {
<?php 
	if ($highlight_color) {
	    echo 'background-color: ' .$highlight_color. ';';
    }; 
?>
}

#header {
<?php 
	if ($highlight_color) {
	    echo 'border-top: 4px solid ' .$highlight_color. ';';
    }; 
?>
}
</style>