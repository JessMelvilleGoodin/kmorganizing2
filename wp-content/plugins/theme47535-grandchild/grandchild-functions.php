/*
Plugin Name: theme47535 - Grandchild theme plugin
Description: Grandchild theme for theme47535 build as a plugin.
Author: JMG
Author URI: http://www.kmorganizing.com
Version: 1.0
*/

// Adds our new file with styles
function grandchild_add_styles() {
	wp_register_style( 'grandchild-style', plugins_url( 'grandchild-styles.css', __FILE__ ), array(), '1.0' );
	wp_enqueue_style( 'grandchild-style' );
}
add_action( 'wp_print_styles', 'grandchild_add_styles' );
 
// Adds our new file with scripts
function grandchild_add_scripts() {
	wp_register_script( 'grandchild-script', plugins_url( 'grandchild-scripts.js', __FILE__ ), array( 'jquery' ), '1.0' );
	wp_enqueue_script( 'grandchild-script' );
}
add_action( 'wp_print_scripts', 'grandchild_add_scripts' );