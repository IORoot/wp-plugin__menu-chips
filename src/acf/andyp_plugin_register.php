<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Pulse - Chip Menu',
        'icon'      => 'link',
        'color'     => '#A5D6A7',
        'path'      => __FILE__,
    ]);
} );