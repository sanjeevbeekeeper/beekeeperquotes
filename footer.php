</div> <!-- // container -->

    <!-- footer -->
        <footer>
            <!-- title -->
            <div class="footer_blogtitle">
                <a href="<?php the_permalink(); ?>"> <?php bloginfo('name'); ?> </a>

            </div>

            <!-- browse by author -->
            <div class="footer_browsebyauthor">
                <span>50 Quotes</span>
                <!-- <a href="#">Browse by Author</a> -->
            </div>

            <div class="footer_copyright">
                2005 - <?php echo date('Y'); ?> &copy; <?php bloginfo('name'); ?>. <span class="nowrap">Created by <a href="http://sanjeevbeekeeper.com">Sanjeev Beekeeper</a></span>
            </div>
        </footer>
    </div>

<?php wp_footer(); ?> <!-- script location -->
</body>
</html>
