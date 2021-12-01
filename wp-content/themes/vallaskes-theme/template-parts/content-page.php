<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vallaskes_Theme
 */

?>

<?php if ( function_exists('yoast_breadcrumb') ) : ?>
    <div class="breadcrumb">
        <div class="wrapper">
            <?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
        </div>
    </div>
<?php endif; ?>
<div class="wrapper all-page">
    <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    <?php vallaskes_theme_post_thumbnail(); ?>
    <div class="page-content">
        <?php the_content(); ?>
    </div>
</div>
