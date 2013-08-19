<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'client_review',
		array(
			'labels' => array(
				'name' => __( 'Reviews' ),
				'singular_name' => __( 'Review' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}