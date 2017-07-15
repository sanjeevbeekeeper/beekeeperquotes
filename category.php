<?php get_header(); ?>
<!-- header -->

    <!-- Category author name -->
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h1 class="category_authorname">
                <?php
                    // category
                    if ( is_category() ) {
                        echo '<span>Quotes from:</span> ' . single_cat_title( '', false);
                        }
                    // archive
                    elseif ( is_archive() ) {
                        echo 'Archive';
                        }
                ?>
            </h1> <!-- // alert -->

            <!-- Loop start -->
            <?php
                if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>

                        <div class="quotes_container_cat">
                            <!-- See the content.php -->
                            <?php get_template_part('content'); ?>
                        </div> <!-- // .quotes_container -->

                <!-- Loop end -->
                <?php
                endwhile;
                else:
                    _e('There is no pages matches your criteria.');
                endif;
                ?>

    </div> <!-- // .col -->
</div>

<!-- footer -->
<?php get_footer(); ?>
