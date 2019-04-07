<?php
/**
* Plugin Name: Dead Good Books Carousel
* Description: Dead Good Books' Carousel
* Version: 1.0
* Author: Daniel Cutler
*/

function enqueue_dgb_plugin_styles() {
    wp_enqueue_style('DGB-carousel-plugin-style', plugins_url( 'carousel.css', __FILE__ ));
}

add_action('wp_enqueue_scripts', 'enqueue_dgb_plugin_styles');

function enqueue_dgb_plugin_scripts() {
  wp_enqueue_script('DGB-carousel-plugin-js', plugins_url( 'carousel.js', __FILE__ ), array('jquery'));
}

add_action('wp_enqueue_scripts', 'enqueue_dgb_plugin_scripts');

function dgb_carousel_shortcode() {
	DGBCarousel();
}

add_shortcode( 'dgb_carousel', 'dgb_carousel_shortcode' );

function DGBCarousel() {
  if (!is_admin()) {
    include('carousel.php');
  }
}
