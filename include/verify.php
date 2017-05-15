<?php
function wow_signup_register_option() {
	register_setting('wow_signup_license', 'wow_signup_license_key', 'wow_signup_sanitize_license' );
}
add_action('admin_init', 'wow_signup_register_option');
function wow_signup_sanitize_license( $new ) {
	$old = get_option( 'wow_signup_license_key' );
	if( $old && $old != $new ) {
		delete_option( 'wow_signup_license_status' );
	}
	return $new;
}
function wow_signup_activate_license() {
	if( isset( $_POST['wow_signup_license_activate'] ) ) {
	 	if( ! check_admin_referer( 'wow_signup_nonce', 'wow_signup_nonce' ) )
			return; 
		$license = trim( get_option( 'wow_signup_license_key' ) );
		$api_params = array(
			'edd_action'=> 'activate_license',
			'license' 	=> $license,
			'item_name' => urlencode( WOW_SIGNUP_ITEM_NAME ), 
			'url'       => home_url()
		);
		$response = wp_remote_post( WOW_ESTORE, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );
		if ( is_wp_error( $response ) )
			return false;
		$license_data = json_decode( wp_remote_retrieve_body( $response ) );
		update_option( 'wow_signup_license_status', $license_data->license );
	}
}
add_action('admin_init', 'wow_signup_activate_license');
function wow_signup_deactivate_license() {
	if( isset( $_POST['wow_signup_license_deactivate'] ) ) {
	 	if( ! check_admin_referer( 'wow_signup_nonce', 'wow_signup_nonce' ) )
			return; 
		$license = trim( get_option( 'wow_signup_license_key' ) );
		$api_params = array(
			'edd_action'=> 'deactivate_license',
			'license' 	=> $license,
			'item_name' => urlencode( WOW_SIGNUP_ITEM_NAME ), 
			'url'       => home_url()
		);
		$response = wp_remote_post( WOW_ESTORE, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );
		if ( is_wp_error( $response ) )
			return false;
		$license_data = json_decode( wp_remote_retrieve_body( $response ) );
		if( $license_data->license == 'deactivated' )
			delete_option( 'wow_signup_license_status' );
	}
}
add_action('admin_init', 'wow_signup_deactivate_license');
function wow_signup_check_license() {
	global $wp_version;
	$license = trim( get_option( 'wow_signup_license_key' ) );
	$api_params = array(
		'edd_action' => 'check_license',
		'license' => $license,
		'item_name' => urlencode( WOW_SIGNUP_ITEM_NAME ),
		'url'       => home_url()
	);
	$response = wp_remote_post( WOW_ESTORE, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );
	if ( is_wp_error( $response ) )
		return false;
	$license_data = json_decode( wp_remote_retrieve_body( $response ) );
	if( $license_data->license == 'valid' ) {
		echo 'valid'; exit;
	} else {
		echo 'invalid'; exit;
	}
}