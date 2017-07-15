</div> <!-- // container -->

    <!-- footer -->
        <footer>

            <!-- title -->
            <!-- <div class="footer_blogtitle"> -->
                <!-- <a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a> -->
            <!-- </div> -->

            <!-- Total no of Quotes -->
            <div class="footer_browsebyauthor">
                <?php
                $totalquotes = esc_attr( get_option('total_quotes') );
                 ?>
                <span><?php echo $totalquotes; ?></span>

                <?php
                    wp_nav_menu( array(
                        'menu'              => 'secondary-menu',
                        'theme_location'    => 'secondary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>

            </div>

            <div class="footer_copyright">
                2011 - <?php echo date('Y'); ?> &copy; <?php bloginfo('name'); ?>. <span class="nowrap">Created by <a href="http://sanjeevbeekeeper.com" target="_blank">Sanjeev Beekeeper</a></span>
            </div>
        </footer>
    </div>

<?php wp_footer(); ?> <!-- script location -->
</body>
</html>
