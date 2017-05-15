<?php
/**
 * Plugin Name:       Wow Viral Signups Pro
 * Plugin URI:        https://wow-estore.com/downloads/wow-viral-signups-pro/
 * Description:       Setup signup forms with limited spaces & enable the viral sharing
 * Version:           1.3
 * Author:            Wow-Company
 * Author URI:        http://wow-company.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wow-marketings
  */
if ( ! defined( 'WPINC' ) ) {die;}
define('WOW_SIGNUP', true);
load_plugin_textdomain('wow-marketings', false, dirname(plugin_basename(__FILE__)) . '/languages/');
if ( ! defined( 'WOW_ESTORE' ) ) {
	define( 'WOW_ESTORE', 'https://wow-estore.com' );
}
define( 'WOW_SIGNUP_ITEM_NAME', 'Wow Viral Signups Pro' ); 
define( 'WOW_SIGNUP_VERSION', '1.3' );
define( 'WOW_SIGNUP_PLUGIN_BASENAME', dirname(plugin_basename(__FILE__)) );

function activate_wow_signup() {
	require_once plugin_dir_path( __FILE__ ) . 'include/activator.php';	
}	
register_activation_hook( __FILE__, 'activate_wow_signup' );
function deactivate_wow_signup() {	
	require_once plugin_dir_path( __FILE__ ) . 'include/deactivator.php';
}
register_deactivation_hook( __FILE__, 'deactivate_wow_signup' );
if( !class_exists( 'JavaScriptPacker' )) {
	require_once plugin_dir_path( __FILE__ ) . 'include/class.JavaScriptPacker.php';
}
if( !class_exists( 'WOWWPClass' )) {
	require_once plugin_dir_path( __FILE__ ) . 'include/wowclass.php';
}
require_once plugin_dir_path( __FILE__ ) . 'include/verify.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';
require_once plugin_dir_path( __FILE__ ) . 'public/public.php';
function wow_signup_plugin_updater() {
if( !class_exists( 'WOW_ESTORE_WP_PLUGIN_CLASS' )) {
	require_once plugin_dir_path( __FILE__ ) . 'include/wow_estore_wp_plugin_class.php';
}
	$license_key = trim( get_option( 'wow_signup_license_key' ) );
	if (class_exists( 'WOW_ESTORE_WP_PLUGIN_CLASS' )){
	$edd_updater = new WOW_ESTORE_WP_PLUGIN_CLASS( WOW_ESTORE, __FILE__, array(
			'version' 	=> WOW_SIGNUP_VERSION, 				
			'license' 	=> $license_key, 		
			'item_name' => WOW_SIGNUP_ITEM_NAME,
			'author' 	=> 'Wow-Company',
			'url'           => home_url()
		)
	);
	}
}
add_action( 'admin_init', 'wow_signup_plugin_updater', 0 );

function wow_signup_row_meta( $meta, $plugin_file ){
	if( false === strpos( $plugin_file, basename(__FILE__) ) )
		return $meta;

	$meta[] = '<a href="https://wow-estore.com/support/" target="_blank">Support </a> | <a href="https://www.facebook.com/wowaffect/" target="_blank">Join us on Facebook</a>';
	return $meta;  
}
add_filter( 'plugin_row_meta', 'wow_signup_row_meta', 10, 4 );

function wow_signup_action_links( $actions, $plugin_file ){
	if( false === strpos( $plugin_file, basename(__FILE__) ) )
		return $actions;
	$settings_link = '<a href="admin.php?page=wow-viral-signups-pro' .'">Settings</a>'; 
	array_unshift( $actions, $settings_link ); 
	return $actions; 
}
add_filter( 'plugin_action_links', 'wow_signup_action_links', 10, 2 );

function wow_signup_asset(){
	$filename = plugin_dir_path( __FILE__ ).'asset';
	if (!is_writable($filename)) {
		add_action('admin_notices', 'wow_signup_asset_notice' );
	} 
}
add_filter( 'admin_init', 'wow_signup_asset');
function wow_signup_asset_notice(){
	$path = plugin_dir_path( __FILE__ ).'asset';
    echo "<div class='error' id='message'><p>".__("Please set the 775 access rights (chmod 775) for the '".$path."' folder.", "marketing-wp")."</p> </div>";
}
function updata_data_wow_signup (){
	$data = get_option( 'data_wow_signup', '0' );
	if ($data != '1.1'){
		echo "<div class='error' id='message'><p>".__("Please, deactivate and then activate the plugin 'Wow Viral Signups Pro' for proper work", "marketing-wp")."</p> </div>";
	}
}
add_action('admin_notices', 'updata_data_wow_signup');