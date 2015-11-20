<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rhodes
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" />

        <link href='https://fonts.googleapis.com/css?family=Roboto:300,300italic,500,500italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700italic' rel='stylesheet' type='text/css'>        

        <?php wp_head(); ?>
        
        <?php if( is_page( 7 ) ) { ?>

            <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
            <script src="<?php bloginfo('stylesheet_directory'); ?>/js/litetooltip.min.js"></script>  
        
            <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/litetooltip.min.css" type="text/css" />

            <script>      
                $(document).ready(function () {
                    $('.litetooltip-hotspot-wrapper .hotspot').each(function () { 
                        $(this).LiteTooltip({ title: $(this).find('.data-container').html() });
                    });
                });
            </script>   

        <?php } else {} ?>
        
                              
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
	       <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rhodes' ); ?></a>
    
        <header id="masthead" class="site-header" role="banner">
                <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>" class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'rhodes' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav>                
        </header>

	<div id="content" class="site-content">
