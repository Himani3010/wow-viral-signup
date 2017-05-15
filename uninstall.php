<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}
delete_option( 'wow_signup_license_key' );
delete_option( 'wow_signup_license_status' );
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}wow_herd_effects" );
