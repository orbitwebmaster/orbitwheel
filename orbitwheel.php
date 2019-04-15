<?php
/**
* Plugin Name: OrbitWeb Win Wheel plugin
* Plugin URI: https://orbitweb.ca/
* Description: OrbitWeb Win Wheel Plugin provide the posibility to create a wheel of fortune to won gifts, discounts and coupons.
* Version: 1.0
* Author: ADIS Ingenieros
* Author URI: http://adisingenieros.com/
**/

function orbitwebWinWheelShortCode_US() {
	ob_start();
	//include(get_stylesheet_directory().'/orbitwheel/wheel.php');
	include(ABSPATH.'wp-content/plugins/orbitwheel/wheel_us.php');
	return ob_get_clean();
}
add_shortcode('orbitwebwinwheel_us', 'orbitwebWinWheelShortCode_US');

function orbitwebWinWheelShortCode_FR() {
	ob_start();
	//include(get_stylesheet_directory().'/orbitwheel/wheel.php');
	include(ABSPATH.'wp-content/plugins/orbitwheel/wheel_fr.php');
	return ob_get_clean();
}
add_shortcode('orbitwebwinwheel_fr', 'orbitwebWinWheelShortCode_FR');


add_action( 'admin_menu', 'orbitweb_wheel_plugin' );
function orbitweb_wheel_plugin() {
	add_menu_page( 'Orbitweb WinWheel', 'Orbitweb WinWheel', 'manage_options', 'orbitwebWinWheel', 'orbitweb_wheel_plugin_options' );
}

/** Step 3. */
function orbitweb_wheel_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include(ABSPATH.'wp-content/plugins/orbitwheel/wheel-options.php');
}