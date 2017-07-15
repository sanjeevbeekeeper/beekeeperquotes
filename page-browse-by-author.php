<?php get_header(); ?>
<!-- header -->


    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <h1 class="category_authorname category_browse-by-author">
                <span>Browse by Author</span>
            </h1> <!-- // alert -->
            <div class="browse_by_author">

                <?php wp_list_categories(array(
                    'title_li' => ''
                    ));
                    ?>

            </div>
        </div>
    </div>

<!-- footer -->
<?php get_footer(); ?>
