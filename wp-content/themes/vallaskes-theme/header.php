<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vallaskes_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1, viewport-fit=cover" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link" href="#page">
        <span class="arrow"></span>
        <?php esc_html_e( 'Back to top', 'vallaskes-theme' ); ?>
    </a>

	<header class="site-header">
		<div class="wrapper flex">
            <div class="site-branding">
                <?php the_custom_logo(); ?>
            </div>
            <div class="navigation">
                <div class="navigation-button">
                    <div id="hamburger" class="hamburglar">

                        <div class="burger-icon">
                            <div class="burger-container">
                                <span class="burger-bun-top"></span>
                                <span class="burger-filling"></span>
                                <span class="burger-bun-bot"></span>
                            </div>
                        </div>

                        <!-- svg ring containter -->
                        <div class="burger-ring">
                            <svg class="svg-ring">
                                <path class="path" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                            </svg>
                        </div>
                        <!-- the masked path that animates the fill to the ring -->

                        <svg width="0" height="0">
                            <mask id="mask">
                                <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#333" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                            </mask>
                        </svg>
                        <div class="path-burger">
                            <div class="animate-path">
                                <div class="path-rotation"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <nav  class="navigation-header">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'head-menu',
                            'container'       => 'ul',
                            'menu_id'        => 'head-menu',
                            'depth'          => 3,
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
	</header>
