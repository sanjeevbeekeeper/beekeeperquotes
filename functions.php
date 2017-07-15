<?php

// functions are in 'inc/' folder
require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/quotes_settings.php';
require get_template_directory() . '/inc/remove_emoji.php'; // 25 mar 2017

/* =================================================
    PLUGIN: wp-bootstrap-navwalker
==================================================== */
//// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
//// Declaring the menu
register_nav_menus( array(
    'primary-menu' => __( 'Primary Menu', 'THEMENAME' ),
    ));

    
