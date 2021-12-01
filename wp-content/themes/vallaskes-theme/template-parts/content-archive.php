<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vallaskes_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php echo get_permalink() ?>" rel="bookmark">
        <?php the_title( '<h2>','</h2>' ); ?>
        <?php vallaskes_theme_post_thumbnail(); ?>
    </a>
</article>
