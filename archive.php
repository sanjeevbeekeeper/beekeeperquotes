<?php get_header(); ?>
<!-- header -->

    <!-- Search notification -->
    <div class="alert alert-warning">
        <?php
            // category
            if ( is_category() ) {
                echo 'Filtered by the Category: <strong>' . single_cat_title( '', false). '</strong>';
                }
            // author
            elseif ( is_author() ) {
                the_post();
                echo 'Filtered by the Author: <strong>' . get_the_author() . '</strong>' ;
                }
            // month
            elseif ( is_month() ) {
                echo 'Archives for the Month: <strong>' . get_the_date('F Y') . '</strong>' ;
                }
            // year
            elseif ( is_year() ) {
                echo 'Archives for the Year: <strong>' . get_the_date('Y') . '</strong>' ;
                }
            // archive
            elseif ( is_archive() ) {
                echo 'Archive';
                }
        ?>
    </div> <!-- // alert -->

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
