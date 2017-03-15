<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <!-- header styles location -->
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>

    <!-- ########## -->
    <!-- ONLY FOR REFERENCE -->
    <div class="responsive_help">
        <div class="visible-lg">LG</div>
        <div class="visible-md">MD</div>
        <div class="visible-sm">SM</div>
        <div class="visible-xs">XS</div>
    </div>
    <!-- ONLY FOR REFERENCE -->
    <!-- ########## -->

        <!-- content wrapping -->
        <div class="container minheight">
