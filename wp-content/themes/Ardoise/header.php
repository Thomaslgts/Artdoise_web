<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle">Menu</button>
    <?php
 wp_nav_menu ( array (
 'theme_location' => 'main-menu' ,
 'menu_class' => 'main-menu',
 ) ); ?>
 </nav>