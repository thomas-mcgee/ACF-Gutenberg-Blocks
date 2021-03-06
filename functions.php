<?php

function hfm_acf_init_block_types() {

	// Check function exists.
	if ( function_exists( 'acf_register_block_type' ) ) {

		// register a testimonial block.
		acf_register_block_type( array(
			'name'            => 'testimonial',
			'title'           => __( 'Testimonial', 'hellfish-media' ),
			'description'     => __( 'A custom testimonial block.', 'hellfish-media' ),
			'render_template' => 'template-parts/blocks/testimonial/testimonial.php',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
			'keywords'        => array( 'testimonial', 'quote' ),
		) );
	}

}

add_action( 'acf/init', 'hfm_acf_init_block_types' );