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

        <!-- content wrapping -->
        <div class="container minheight">

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                    <div id="pagename">
                        <!-- If is_home then make the title simple, else make it clickable link -->
                        <?php
                        if ( is_home() ) {
                            ?>
                            <h3> <?php bloginfo('name'); ?> </h3>
                        <?php }
                        else {
                            ?>
                            <h4> <a href="<?php echo home_url(); ?>"> Back </a> </h4>
                        <?php }
                            ?>

                    </div> <!-- #pagename -->
                </div> <!-- col -->
            </div> <!-- row -->
