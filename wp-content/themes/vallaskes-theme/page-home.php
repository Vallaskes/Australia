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
        <?php if( have_rows('casino1') ): ?>
            <div class="casino">
                <div class="wrapper">
                    <h2><?php the_field('casino1-title'); ?></h2>
                    <div class="casino-list">
                        <?php while( have_rows('casino1') ): the_row(); ?>
                            <div class="casino-item <?php if(get_row_index() == 1): echo 'top'; endif; ?>">
                                <div class="casino-item-header">
                                    <?php if (get_row_index() == 1) : ?>
                                        <div class="top-title">
                                            <h3><?php the_sub_field('topTitle'); ?></h3>
                                        </div>
                                    <?php endif; ?>
                                    <div class="number">#<?php echo get_row_index(); ?></div>
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
                                        <div class="big-text"><?php the_sub_field('ratingTitle'); ?></div>
                                        <div class="rating-area">
                                            <div class="grey"></div>
                                            <div style="width:<?php echo $width; ?>%" class="visible"></div>
                                        </div>
                                        <div class="rating-number">
                                            <?php echo $rating; ?><small>/5</small>
                                        </div>
                                    </div>
                                    <div class="bonus">
                                        <div class="bonus-money">
                                            $<?php the_sub_field('bonus'); ?>
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
                                        <button class="play" onclick="window.open('<?php the_sub_field('casinoLink'); ?>', '_blank')">
                                            <?php the_sub_field('buttonText'); ?>
                                        </button>
                                    </div>
                                    <?php if (get_row_index() !== 1) : ?>
                                        <div class="read-more"><?php the_sub_field('readMore'); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="casino-item-footer">
                                    <div class="benefit">
                                        <?php if( have_rows('benefitsList') ): ?>
                                            <ul class="benefit-list">
                                                <?php while( have_rows('benefitsList') ): the_row(); ?>
                                                    <li class="benefit-item"><?php the_sub_field('list'); ?></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                    <div class="payout">
                                        <p class="big-text"><?php the_sub_field('payoutTitle'); ?></p>
                                        <p><?php the_sub_field('payout'); ?></p>
                                    </div>
                                    <div class="payout-speed">
                                        <p class="big-text"><?php the_sub_field('payoutSpeedTitle'); ?></p>
                                        <p><?php the_sub_field('payoutSpeed'); ?></p>
                                    </div>
                                    <div class="deposit-icon">
                                        <p class="big-text"><?php the_sub_field('depositIconTitle'); ?></p>
                                        <?php if( have_rows('paymentLogo') ): ?>
                                            <div class="deposit-icon-list">
                                                <?php while( have_rows('paymentLogo') ): the_row();?>
                                                    <?php
                                                    $img = get_sub_field('image');
                                                    if( !empty($img) ) : echo wp_get_attachment_image( $img['id'], 'full' ); endif;
                                                    ?>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('doubleSection') ): ?>
            <div class="double-section section">
                <div class="wrapper">
                    <?php while( have_rows('doubleSection') ): the_row(); ?>
                        <div class="content-item">
                            <h2><?php the_sub_field('title');?></h2>
                            <div><?php the_sub_field('text');?></div>
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
                            <h2><?php the_sub_field('title');?></h2>
                            <div><?php the_sub_field('text');?></div>
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
                                    <?php if (get_row_index() == 1) : ?>
                                        <div class="top-title">
                                            <h3><?php the_sub_field('topTitle'); ?></h3>
                                        </div>
                                    <?php endif; ?>
                                    <div class="number">#<?php echo get_row_index(); ?></div>
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
                                        <div class="big-text"><?php the_sub_field('ratingTitle'); ?></div>
                                        <div class="rating-area">
                                            <div class="grey"></div>
                                            <div style="width:<?php echo $width; ?>%" class="visible"></div>
                                        </div>
                                        <div class="rating-number">
                                            <?php echo $rating; ?><small>/5</small>
                                        </div>
                                    </div>
                                    <div class="bonus">
                                        <div class="bonus-money">
                                            $<?php the_sub_field('bonus'); ?>
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
                                        <button class="play" onclick="window.open('<?php the_sub_field('casinoLink'); ?>', '_blank')">
                                            <?php the_sub_field('buttonText'); ?>
                                        </button>
                                    </div>
                                    <?php if (get_row_index() !== 1) : ?>
                                        <div class="read-more"><?php the_sub_field('readMore'); ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="casino-item-footer">
                                    <div class="benefit">
                                        <?php if( have_rows('benefitsList') ): ?>
                                            <ul class="benefit-list">
                                                <?php while( have_rows('benefitsList') ): the_row(); ?>
                                                    <li class="benefit-item"><?php the_sub_field('list'); ?></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                    <div class="payout">
                                        <p class="big-text"><?php the_sub_field('payoutTitle'); ?></p>
                                        <p><?php the_sub_field('payout'); ?></p>
                                    </div>
                                    <div class="payout-speed">
                                        <p class="big-text"><?php the_sub_field('payoutSpeedTitle'); ?></p>
                                        <p><?php the_sub_field('payoutSpeed'); ?></p>
                                    </div>
                                    <div class="deposit-icon">
                                        <p class="big-text"><?php the_sub_field('depositIconTitle'); ?></p>
                                        <?php if( have_rows('paymentLogo') ): ?>
                                            <div class="deposit-icon-list">
                                                <?php while( have_rows('paymentLogo') ): the_row();?>
                                                    <?php
                                                    $img = get_sub_field('image');
                                                    if( !empty($img) ) : echo wp_get_attachment_image( $img['id'], 'full' ); endif;
                                                    ?>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
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
        <?php if( have_rows('question') ): ?>
            <div class="question">
                <div class="wrapper">
                    <h2><?php the_field('questionTitle'); ?></h2>
                    <ul class="question-list">
                        <?php while( have_rows('question') ): the_row(); ?>
                            <li class="question-item">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <div><?php the_sub_field('text'); ?></div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('fiveSection') ): ?>
            <div class="five-section section">
                <div class="wrapper">
                    <?php while( have_rows('fiveSection') ): the_row(); ?>
                        <div class="content-item">
                            <h2><?php the_sub_field('title');?></h2>
                            <div><?php the_sub_field('text');?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if( have_rows('faq') ): ?>
            <div class="faq">
                <div class="wrapper">
                    <h2><?php the_field('faqTitle'); ?></h2>

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
