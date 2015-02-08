<?php
/*
Plugin Name: Remove  Open Sans font from WP core
Plugin URI: http://suoling.net/remove-open-sans-font-from-wp-core/
Description: Remove  Open Sans font from WP core.
Version: 1.0.0
Author: Suifengtec
Author URI: http://suoling.net
Text Domain: c2s
License: GPL v2 or later
*/
function coolwp_remove_open_sans_from_wp_core() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    wp_enqueue_style('open-sans','');
}
add_action( 'init', 'coolwp_remove_open_sans_from_wp_core' );
?>