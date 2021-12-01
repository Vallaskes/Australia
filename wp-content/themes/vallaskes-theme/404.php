<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Vallaskes_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">

            <h1 class="page-title"><?php esc_html_e( '404 page not found', 'vallaskes-theme' ); ?></h1>

            <a href="<?php echo home_url(); ?>" class="button">Home</a>

		</section>

	</main>

<?php
get_footer();
