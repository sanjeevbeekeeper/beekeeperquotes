<?php

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
