<?php

/*
 * 
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - Pulse - Chips Bar - Shortcode
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>🩳SHORTCODE</strong> | <em>Pulse Dashboard > Shortcode</em> | Creates the 'chips' menu at the top.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                            Enqueue the CSS                              │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/inc/enqueue_scripts.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                            The Shortcodes                               │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/shortcodes/chips.php';