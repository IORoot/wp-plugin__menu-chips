<?php

/**
 * Register the Chips CSS for use.
 * 
 */
function register_chips() {
    
    // Load and enqueue now, before everything else.
    wp_register_style( 'andyp_chips_css', '/wp-content/plugins/andyp_pulse_chips/src/sass/style.css' );
    wp_enqueue_style( 'andyp_chips_css' );

    wp_register_script( 'andyp_chips_js', '/wp-content/plugins/andyp_pulse_chips/src/js/current_page.js' );
    wp_enqueue_script('andyp_chips_js');

}

/**
 * This says 'encode' but we're only registering.
 */
add_action( 'wp_enqueue_scripts', 'register_chips' );