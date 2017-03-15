
    <!-- refresh button -->
    <?php
        if ( is_category() ) { ?>
            <!-- title -->
            <?php the_title('<h3 class="quotes_container_title quotes_container_title_cat">', '</h3>'); ?>

            <!-- content -->
            <div class="quotes_container_content quotes_container_content_cat">
                <?php the_content(); ?>
            </div>
            <?php }
        else { ?>
            <!-- refresh button -->
            <div class="pull-right">
                <button type="button" class="btn btn-custom" onClick="window.location.reload();">Refresh</button>
            </div>

            <!-- title -->
            <?php the_title('<h3 class="quotes_container_title">', '</h3>'); ?>

            <!-- content -->
            <div class="quotes_container_content">
                <?php the_content(); ?>
            </div>

            <div class="quotes_container_category">
                <?php the_category(', ') ?>
            </div>

        <?php }
        ?>

    <?php get_category_link( $category_id ); ?>
