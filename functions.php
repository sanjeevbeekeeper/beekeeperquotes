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
add_action( 'wp_enqueue_scripts', 'beekeeperquotes_base' );


// remove the default wordpress versions from the front-end
function quotes_remove_wpversion_strings($src){
	// calling the global variable
	global $wp_version;
	// check the src PHP_URL_QUERY and replace with $query
	// PHP_URL_QUERY is : &ver=
	parse_str(parse_url($src, PHP_URL_QUERY), $query);
	// if the $query is identitical to the $wp_version
	if( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
		// remove it
		$src = remove_query_arg( 'ver', $src );
		}
	return $src;
	}
add_filter('script_loader_src', 'quotes_remove_wpversion_strings');
add_filter('style_loader_src', 'quotes_remove_wpversion_strings');

// ----- //

// Remove metatag 'generator' from the header
function quotes_remove_metaversion(){
	return '';
	}
add_filter('the_generator', 'quotes_remove_metaversion');
