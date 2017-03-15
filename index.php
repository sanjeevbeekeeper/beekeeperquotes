<?php get_header(); ?>
<!-- header -->

<!-- header -->
<!-- Loop start -->
    <?php
        $col1 = array(
            'category_name'     => '',  // Show content from 'this' category
            'orderby'           => 'rand',       // Randomise the post
            'posts_per_page'    => '1'           // Display only one post
            );
        // using variable for wp_query
        $var_wp = new WP_Query($col1);
        // calling the variable
        if ($var_wp->have_posts()) :
        while ($var_wp->have_posts()) : $var_wp->the_post(); ?>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="quotes_container">

                    <!-- See the content.php -->
                    <?php get_template_part('content'); ?>

                </div> <!-- // .quotes_container -->
            </div> <!-- // .col -->
        </div>
        
        <?php
        endwhile; ?>
        <?php endif; ?>
    <!--  resetting wp_query -->
    <?php wp_reset_postdata(); ?>
<!-- Loop ends -->

<!-- footer -->
<?php get_footer(); ?>
