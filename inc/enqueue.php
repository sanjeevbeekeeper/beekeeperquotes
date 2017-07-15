<?php

/* =================================================
	Base Scripts and Styles
==================================================== */
function beekeeperquotes_base() {

	// ===== Deregister WordPress Default jQuery Script and Add custom jQuery in the footer
	wp_deregister_script( 'jquery' );

	// ===== BOOTSTRAP CSS
	wp_enqueue_style (
		'bootstrap',
		get_stylesheet_directory_uri() . '/lib/vendor/bootstrap/bootstrap.min.css',
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
add_action( 'wp_enqueue_scripts', 'beekeeperquotes_base' );
