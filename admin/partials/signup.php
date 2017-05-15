<?php if ( ! defined( 'ABSPATH' ) ) exit; 
$license 	= get_option( 'wow_signup_license_key' );
$status 	= get_option( 'wow_signup_license_status' );
$wow = (isset($_REQUEST["wow"])) ? sanitize_text_field($_REQUEST["wow"]) : '';
include_once( 'signup/menu.php' );
if ($wow == "add" && $status !== false && $status == 'valid'){
	include_once( 'signup/add.php' );
	return;
}
if ($wow == "signed" && $status !== false && $status == 'valid'){
	include_once( 'signup/signed.php' );
	return;
}
if ($wow == "goal" && $status !== false && $status == 'valid'){
	include_once( 'signup/goal.php' );
	return;
}
if ($wow == "" && $status !== false && $status == 'valid'){
	include_once( 'signup/list.php' );
	return;
}
if ($wow == "license"){
	include_once( 'signup/license.php' );	
	return;
}
else {	
	echo '<div class="metabox-holder"><div class="meta-box-sortables"><div class="postbox"><h3><a href="admin.php?page=wow-viral-signups-pro&wow=license">'.__("Enter the license key to activate the plugin", "wow-marketings").'</a></h3></div></div></div>';
}
?>
</div>