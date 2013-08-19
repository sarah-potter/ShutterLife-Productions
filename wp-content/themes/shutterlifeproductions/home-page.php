<?php
/**
 * Template Name: Home Page
 * @since Coraline 1.0
 */

get_header(); ?>


<div id="content-container" class="full-width">
	<div id="content" role="main">
		
		
		<div id="splash-review">		
			<?php
			  query_posts( array( 'post_type' => 'client_review', 'showposts' => 10 ) );
			  if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content();
			?>
			  <h6 class="client-byline">-<?php the_title(); ?></h6>
			
			<?php endwhile; endif; wp_reset_query(); ?>

			<div class="more-reviews"><a href="/more-reviews">more reviews...</a></div>
		</div>

		

		
		<h2 class="stories">We Tell Stories Through</h2>
		<div id="story-tellers">
			<!-- <div class="mesh-foreground"> </div> -->
			<a class="story-teller-photo" href="/photography"><img src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/story-tellers-photos.png" width="300px"></a>
			
		<a class="story-teller-video" href="/cinematography"><img src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/story-tellers-video.png" height="305px"></a>
		
		</div>
	</div>
		
		<div id="banner-menu-homepage">
				<ul>
					<li><a href="/blog">Blog</a></li>
					<li><a href="/testimonials">Reviews</a></li>
					<li><a href="/faq">FAQ</a></li>
				</ul>
			</div>
		
		<div id="get-to-know-us">
			<div id="orange-arrow"></div>
			
			<div class="get-to-know-us"></div>
				
			<a href="/meet-us"><img class="about-us" src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/about-us-tiny-heart.png"></a>
			
		</div>
		
		<div id="live-tweet">
			<?php echo do_shortcode('[jmlt]'); ?>
		
		
		</div>
		
		<div id="content-blocks">
			<ul>
				<li><a href="/photography"><img src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/photos.jpg"></a></li>
				<li><a href="/blog"><img src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/blog.jpg"></a></li>
				<li><a href="/testimonials"><img src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/reviews.jpg"></a></li>
		
		</div>
		
		<div id="as-seen-on">
			<h3>As Seen On</h3>
			<span class="blue-arrow"><img src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/blue-arrow.png"></span>
			
			
			<h5>Area for logos</h5>
			<p>&nbsp;</p>

			
		</div>
		
	


	</div>
</div>

<?php get_footer('home'); ?>