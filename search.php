<?php get_header(); ?>
<!-- header -->

    <!-- Notification -->
    <div class="alert alert-info">
        Search Results for: <strong><?php the_search_query(); ?></strong>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

            <?php
                if ( have_posts() ) :
                while ( have_posts() ) : the_post();

                // See the content.php
                get_template_part('content');

                endwhile;
                else:
                    _e('There is no pages matches your criteria.');
                endif;
            ?>
        </div> <!-- //.col -->

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php get_sidebar(); ?>
        </div> <!-- //.col -->

    </div> <!-- //.row -->

<!-- footer -->
<?php get_footer(); ?>
