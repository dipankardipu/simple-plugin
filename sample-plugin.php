<?php
/**
 * Plugin Name:     Sample Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     sample-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Sample_Plugin
 */

defined( 'ABSPATH' ) or die( "Access denied !" );

define('WPSP_NAME','wp-simple-plugin');

define( "WPSP_URL", trailingslashit( plugin_dir_url( __FILE__ ) ) );

add_shortcode( 'our-shortcode', 'our_shortcode_handler' );

function our_shortcode_handler ( $atts, $content ) {
    return $content .
             "<font style='font-size:24px; color: #a61f38;'>Added by our-shortcode!</font>";
}

require 'inc/sample-plugin.php';