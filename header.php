<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deliver
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header class="main-header">
            <div class="container">
                <div class="header-container">
                    <h1>
                        <?php the_custom_logo(); ?>
                    </h1>
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <?php wp_nav_menu(['theme_location' => 'main-nav', 'menu_class' => 'nav nav-pills']); ?>
                    </nav>
                    <?php if ( is_page('home') ) :?>
<!--                        <div class="bg-slider">-->
<!--                            <div><img src="--><?//= get_template_directory_uri() ?><!--/images/header-bg.png"></div>-->
<!--                            <div><img src="--><?//= get_template_directory_uri() ?><!--/images/header-bg.png"></div>-->
<!--                            <div><img src="--><?//= get_template_directory_uri() ?><!--/images/header-bg.png"></div>-->
<!--                        </div>-->
                    <?php endif; ?>
                </div>
            </div>
        </header>
    </div>

	<div id="content" class="site-content">
