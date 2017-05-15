<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php

function show_wow_signup($atts) {
    extract(shortcode_atts(array('id' => ""), $atts));		
    global $wpdb;
	$table_wow_signup = $wpdb->prefix . "wow_signup";    
    $sSQL = $wpdb->prepare("select * from $table_wow_signup WHERE id = %d", $id);
    $arrresult = $wpdb->get_results($sSQL); 
    if (count($arrresult) > 0) {
        foreach ($arrresult as $key => $val) {
			ob_start();
			include( 'partials/public.php' );			
			$output_wow_signup=ob_get_contents();
			ob_end_clean();			
			wp_enqueue_style( 'wow-signup-style-'.$val->id, WP_PLUGIN_URL.'/'.WOW_SIGNUP_PLUGIN_BASENAME. '/asset/wowstyle-'.$val->id.'.css');		
        }
    } else {		
		$output_wow_signup = "<p><strong>No Records</strong></p>";      
    }		
	wp_enqueue_style ( 'wow-signup-style', plugins_url( 'css/style.css', __FILE__ ));
	wp_enqueue_script( 'wow-signup-cookie', plugins_url( 'js/jquery.cookie.js', __FILE__ ));
	wp_enqueue_script( 'wow-signup-js', plugins_url( 'js/script.js', __FILE__ ));
	wp_localize_script( 'wow-signup-js', 'wow_signup_send', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );	
	return $output_wow_signup;
}
add_shortcode('Wow-Viral-Signups-Pro', 'show_wow_signup');
require_once plugin_dir_path( __FILE__ ) . 'send/data.php';