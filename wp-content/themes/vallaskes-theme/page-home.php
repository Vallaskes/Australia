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
 *
 * Template name: Home
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="after-header-section">
            <div class="wrapper">
                <div class="best">
                    <?php the_title('<h1 class="best-title">', '</h1>'); ?>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="top">
                    <h3 class="top-title"><?php the_field('topTitle'); ?></h3>
                    <div class="top-casino">
                        <div class="top-casino-container">
                            <div class="top-casino-img">
                                <?php
                                $img = get_sub_field('topCasinoImg');
                                if( !empty($img) ) : echo wp_get_attachment_image( $img['id'], 'full' ); endif;
                                ?>
                            </div>
                            <div class="text">
                                <?php the_field('topCasinoText'); ?>
                            </div>
                            <div class="button">
                                <button rel="nofollow" class="play" onclick="window.open('<?php the_sub_field('topButtonLink'); ?>', '_blank')">
                                    <?php the_field('topButtonText'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if( have_rows('casino1') ): ?>
            <div class="casino">
                <div class="wrapper">
                    <h2><?php the_field('casino1-title'); ?></h2>
                    <div class="casino-list">
                        <?php while( have_rows('casino1') ): the_row(); ?>
                            <div class="casino-item <?php if(get_row_index() == 1): echo 'top'; endif; ?>">
                                <div class="casino-item-header">
                                    <div class="number"><?php echo get_row_index(); ?></div>
                                    <div class="casino-image">
                                        <?php
                                        $img = get_sub_field('casino_logo');
                                        if( !empty($img) ) : echo wp_get_attachment_image( $img['id'], 'full' ); endif;
                                        ?>
                                    </div>
                                    <?php
                                    $rating = get_sub_field('rating');
                                    $width = $rating * 20;
                                    ?>
                                    <div class="rating">
                                        <?php the_sub_field('ratingTitle'); ?> <?php echo $rating; ?>/5
                                    </div>
                                    <div class="bonus">
                                        <div class="bonus-money">
                                            <?php the_sub_field('bonus'); ?>
                                        </div>
                                        <div class="big-text">
                                            <?php the_sub_field('bonusText'); ?>
                                        </div>
                                    </div>
                                    <div class="deposit">
                                        <div class="big-text">
                                            <?php the_sub_field('depositStrong'); ?>
                                        </div>
                                        <div>
                                            <?php the_sub_field('depositSmall'); ?>
                                        </div>
                                    </div>
                                    <div class="button-block">
                                        <button rel="nofollow" class="play" onclick="window.open('<?php the_sub_field('casinoLink'); ?>', '_blank')">
                                            <?php the_sub_field('buttonText'); ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('firstSection') ): ?>
            <div class="first-section section">
                <div class="wrapper">
                    <?php while( have_rows('firstSection') ): the_row(); ?>
                        <div class="content-item">
                            <?php the_sub_field('text');?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('casino2') ): ?>
            <div class="casino">
                <div class="wrapper">
                    <h2><?php the_field('casino2-title'); ?></h2>
                    <div class="casino-list">
                        <?php while( have_rows('casino2') ): the_row(); ?>
                            <div class="casino-item <?php if(get_row_index() == 1): echo 'top'; endif; ?>">
                                <div class="casino-item-header">
                                    <div class="number"><?php echo get_row_index(); ?></div>
                                    <div class="casino-image">
                                        <?php
                                        $img = get_sub_field('casino_logo');
                                        if( !empty($img) ) : echo wp_get_attachment_image( $img['id'], 'full' ); endif;
                                        ?>
                                    </div>
                                    <?php
                                    $rating = get_sub_field('rating');
                                    $width = $rating * 20;
                                    ?>
                                    <div class="rating">
                                        <?php the_sub_field('ratingTitle'); ?> <?php echo $rating; ?>/5
                                    </div>
                                    <div class="bonus">
                                        <div class="bonus-money">
                                            <?php the_sub_field('bonus'); ?>
                                        </div>
                                        <div class="big-text">
                                            <?php the_sub_field('bonusText'); ?>
                                        </div>
                                    </div>
                                    <div class="deposit">
                                        <div class="big-text">
                                            <?php the_sub_field('depositStrong'); ?>
                                        </div>
                                        <div>
                                            <?php the_sub_field('depositSmall'); ?>
                                        </div>
                                    </div>
                                    <div class="button-block">
                                        <button rel="nofollow" class="play" onclick="window.open('<?php the_sub_field('casinoLink'); ?>', '_blank')">
                                            <?php the_sub_field('buttonText'); ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('doubleSection') ): ?>
            <div class="first-section section">
                <div class="wrapper">
                    <?php while( have_rows('doubleSection') ): the_row(); ?>
                        <div class="content-item">
                            <?php the_sub_field('text');?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if( get_field('fullImage') ) : ?>
            <div class="full-image">
                <div class="wrapper">
                     <?php
                     if( !empty(get_field('fullImage')) ) :
                         echo wp_get_attachment_image( get_field('fullImage')['id'], 'full' );
                     endif;
                     ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('thirdSection') ): ?>
            <div class="third-section section">
                <div class="wrapper">
                    <?php while( have_rows('thirdSection') ): the_row(); ?>
                        <div class="content-item">
                            <?php the_sub_field('text');?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('faq') ): ?>
            <div class="faq">
                <div class="wrapper">
                    <h2><?php the_field('faqTitle'); ?></h2>
                    <div class="pre-text"><?php the_field('faqText');?></div>
                    <div class="faq-list">
                        <?php while( have_rows('faq') ): the_row(); ?>
                            <div class="faq-item" data-full="false" itemscope itemtype="https://schema.org/FAQPage">
                                <div class="faq-schema" itemscope= itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <div class="faq-title" itemprop="name"><?php the_sub_field('title'); ?></div>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text"><?php the_sub_field('text'); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
	</main>

<?php
get_footer();
