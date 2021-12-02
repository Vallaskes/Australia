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

	<footer class="site-footer">
		<div class="wrapper">
            <div class="believe">
                <div class="wrapper">
                    <div class="believe-text">
                        <?php the_field('beliveText', 'option'); ?>
                    </div>
                    <?php if( have_rows('believeIcon', 'option') ): ?>
                        <div class="believe-icon">
                            <?php while( have_rows('believeIcon', 'option') ): the_row(); ?>
                                <div class="believe-item">
                                    <?php
                                    $img = get_sub_field('img', 'option');
                                    if( !empty($img) ) : echo wp_get_attachment_image( $img['id'], 'full' ); endif;
                                    ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <nav class="footer-navigation">
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
            <div class="copyright">
                <div class="left">
                    <p><?php echo $_SERVER['HTTP_HOST']; ?> is proudly certified by</p>
                    <?php if( have_rows('lastSecureIcon', 'option') ): ?>
                        <div class="secure-icon">
                            <?php while( have_rows('lastSecureIcon', 'option') ): the_row(); ?>
                                <div class="secure-item">
                                    <?php
                                    $img = get_sub_field('img', 'option');
                                    if( !empty($img) ) : echo wp_get_attachment_image( $img['id'], 'full' ); endif;
                                    ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="right">Copyright © <?php echo date('Y'); ?>. <?php echo $_SERVER['HTTP_HOST']; ?>. All Rights Reserved.</div>
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
