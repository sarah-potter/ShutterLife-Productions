<?php
/**
 * @package Libby
 * @since Coraline 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if (!IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
    setTimeout(function() {
    	jQuery('.royalSlider .rsThumbsArrow')
		.css({position: 'absolute', top: 'auto', height:50,bottom:0, left:-20 })
		.appendTo('.royalSlider')
		.filter('.rsThumbsArrowRight')
		.css({left:'auto', right: -20});
    }, 1);
});
</script>


</head>

<body <?php body_class(); ?>>
<div id="container" class="hfeed contain">
	
	
	



<?php do_action( 'before' ); ?>
	<div id="header">
		<div id="masthead" role="banner">
		
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	    <div><label class="screen-reader-text" for="s">Search for:</label>
	        <input type="text" value="" name="s" id="s" placeholder="search"/>
	        <input type="submit" id="searchsubmit" value="Search" />
	    </div>
    </form>
		
			<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
			<<?php echo $heading_tag; ?> id="site-title">
				<span>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</<?php echo $heading_tag; ?>>
			
			<div id="site-description"><?php bloginfo( 'description' ); ?></div>
		</div><!-- #masthead -->

		

		<div id="branding">
			<?php
				// Check to see if the header image has been removed
				if ( '' != get_header_image() ) :
			?>
			<a href="<?php echo home_url( '/' ); ?>">
				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					if ( is_singular() && has_post_thumbnail() && ( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumbnail' ) ) && $image[1] >= HEADER_IMAGE_WIDTH ) :
						// Houston, we have a new header image!
						the_post_thumbnail();
					else : ?>
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
				<?php endif; // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>
		
		
	
	<div id="navigation" class="ribbon">
			
			<ul class="nav-links">
				<li><a href="/Photography">Photography</a></li>
				<li><a href="/meet-us">Meet us!</a></li>
				<li><a href="/investment">Investment</a></li>
				
				<span class="nav-space"></span>
				
				<li><a href="/cinematography">Cinematography</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/contact">Contact</a></li>
		
		
		</div>		
		
		
		</div><!-- #branding -->
		
		
		<img class="header-box" src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/header-rectangle-shape.png" width="900px">

		
<!--
		<div id="access" role="navigation">
		  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'coraline' ); ?>"><?php _e( 'Skip to content', 'coraline' ); ?></a></div>
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- #access -->

		
		</div>
		
	</div><!-- #header -->

	<div id="content-box">
