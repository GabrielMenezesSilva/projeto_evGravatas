<?php

function perso_setup() {

	register_nav_menu( 'primary', 'Menu principal' );

}

add_action( 'after_setup_theme', 'perso_setup' );

add_theme_support( 'post-thumbnails' ); // ajout de image à la une //

function woocommerce_support()   {
	add_theme_support('woocommerce');
}

add_action( 'after_setup_theme', 'woocommerce_support' );

?>