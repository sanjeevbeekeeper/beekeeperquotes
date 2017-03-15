<?php

/* =================================================
	Base Scripts and Styles
==================================================== */
function beekeeperstudio_base() {

	// ===== Deregister WordPress Default jQuery Script and Add custom jQuery in the footer
	wp_deregister_script( 'jquery' );
	wp_register_script(
		'jquery',
		'https://code.jquery.com/jquery-3.1.1.min.js',
		false,
		'3.1.1',
		true  // show in footer
		);
	wp_enqueue_script('jquery');

	// ===== BOOTSTRAP JS
	wp_enqueue_script(
		'bootstrap',
		'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
		array('jquery'),
		'3.3.7',
		true  // show in footer
		);

	// ===== BOOTSTRAP CSS
	wp_enqueue_style (
		'bootstrap',
		'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
		array(),
		'3.3.7',
		'all'
		);

	// ===== CUSTOM CSS
	wp_enqueue_style (
		'customcss',
		get_stylesheet_directory_uri() . '/lib/styles/customcss/main.min.css',
		array(),
		'1.0.0',
		'all'
		);
	}
add_action( 'wp_enqueue_scripts', 'beekeeperstudio_base' );
