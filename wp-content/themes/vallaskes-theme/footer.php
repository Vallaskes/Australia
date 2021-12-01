<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vallaskes_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="wrapper">
            <div class="footer-block">
                <nav class="footer-navigation">
                    <div class="navigation-title h2">More</div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'container'       => 'ul',
                            'menu_id'        => 'footer-menu',
                            'depth'          => 1,
                        )
                    );
                    ?>
                </nav>
                <div class="sidebar-container">
                    <?php dynamic_sidebar( 'footer' ); ?>
                </div>
            </div>
            <div class="copyright">
                Copyright © <?php echo date('Y'); ?>. onlinecasinosrealmoney.com. All Rights Reserved.
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
