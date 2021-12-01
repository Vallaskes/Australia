<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vallaskes_Theme
 * Template name: Service
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php if ( function_exists('yoast_breadcrumb') ) : ?>
            <div class="breadcrumb">
                <div class="wrapper">
                    <?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('firstSection') ): ?>
            <div class="first-section section">
                <div class="wrapper">
                    <?php while( have_rows('firstSection') ): the_row(); ?>
                        <div class="content-item">
                            <h2><?php the_sub_field('title');?></h2>
                            <div><?php the_sub_field('text');?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php
        $img = get_field('fullImage');
        if( !empty($img) ) : ?>
            <div class="full-image">
                <div class="wrapper">
                    <?php echo wp_get_attachment_image( $img['id'], 'full' ); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('thirdSection') ): ?>
            <div class="third-section section">
                <div class="wrapper">
                    <?php while( have_rows('thirdSection') ): the_row(); ?>
                        <div class="content-item">
                            <h2><?php the_sub_field('title');?></h2>
                            <div><?php the_sub_field('text');?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('why') ): ?>
            <div class="why">
                <div class="wrapper">
                    <h2><?php the_field('whyTitle'); ?></h2>
                    <ul class="why-list">
                        <?php while( have_rows('why') ): the_row(); ?>
                            <li class="why-item">
                                <?php
                                $img = get_sub_field('why-img');
                                if( !empty($img) ) : echo wp_get_attachment_image( $img['id'], 'full' ); endif;
                                ?>
                                <h3><?php the_sub_field('title'); ?></h3>
                                <div><?php the_sub_field('text'); ?></div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('fourSection') ): ?>
            <div class="four-section section">
                <div class="wrapper">
                    <?php while( have_rows('fourSection') ): the_row(); ?>
                        <div class="content-item">
                            <h2><?php the_sub_field('title');?></h2>
                            <div><?php the_sub_field('text');?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
	</main>

<?php
get_footer();
