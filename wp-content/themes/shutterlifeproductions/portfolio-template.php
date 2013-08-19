<?php
/**
 * Template Name: Portfolio
 * @package Shutterlifeproductions
 * @since Coraline 1.0
 */

get_header(); ?>


<div id="portfolio-container" class="full-width">
	<div id="portfolio-content" role="main">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<img class="portfolio-dots" src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/orange-dots.png">

			<div class="portfolio-entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'coraline' ), 'after' => '</div>' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'coraline' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-content -->
		</div><!-- #post-## -->

		<img class="portfolio-dots" src="http://localhost:8888/wp-content/themes/shutterlifeproductions/images/orange-dots.png">

	<?php endwhile; ?>

	</div><!-- #content -->
</div><!-- #content-container -->

<?php get_footer(); ?>