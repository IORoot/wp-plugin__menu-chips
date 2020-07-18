<?php

/**
 * Create the class and return results.
 */
function andyp_chips_callback($atts){

    $output = '';
    
    $a = shortcode_atts( 
        array(
            'menu' => '',
        ), $atts );

    $output .= '<ul class="chips">';
    foreach (wp_get_nav_menu_items($a['menu']) as $item)
    {
        $output .= '<li class="chips__chip">';
            $output .= '<a class="chips__link" href="'. $item->url.'" >';
                $output .= $item->title;
            $output .= '</a>';
        $output .= '</li>';
    }
    $output .= '</ul>';

    echo $output;

    return;
}

add_shortcode( 'andyp_chips', 'andyp_chips_callback' );