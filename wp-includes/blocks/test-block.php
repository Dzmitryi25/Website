<?php

function render_test_block_content($attributes) {
    return '<div>This is a test block!</div>';
}

function register_block_test_block(){
    register_block_type_from_metadata(
		__DIR__ . '/test-block',
		array(
			'render_callback' => 'render_test_block_content',
		)
	);
}

add_action( 'init', 'register_block_test_block' );

