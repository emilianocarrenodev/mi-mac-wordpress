	<!--footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div
                    class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center align-items-lg-start">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-footer.png" class="img-fluid" alt="Mi Mac" title="Mi Mac" loading="lazy">
                </div>
                <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-center align-items-lg-end">
                    <?php wp_nav_menu(array( 
                        'theme_location' => 'menu-footer',
                        'menu_class'     => 'nav',
                     )); ?>
                </div>
            </div>
        </div>
    </footer>
    <!--End footer-->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bundle.min.js"></script>
	<?php wp_footer();?>
</body>
</html>
