<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php include ('include/data.php'); ?>
<h2><?php esc_attr_e("Shortcode", "wow-marketings") ?> <?php esc_attr_e("for Viral Signup", "wow-marketings") ?>: <?php echo "[Wow-Viral-Signups-Pro id=$id]"; ?></h2>
<form action="admin.php?page=wow-viral-signups-pro" method="post">
<div class="wowbox">
<h3><?php esc_attr_e("Name", "wow-marketings") ?></h3>
<div class="inside wow-admin" style="display: block;">	
<div class="wow-admin-col">
<div class="wow-admin-col-12">
<input  placeholder="Name is used only for admin purposes" type='text' name='title' value="<?php echo $title; ?>" class="input-12"/>
</div>
</div>
</div>
</div>
<div class="wowbox">
<h3><?php esc_attr_e("Type", "wow-marketings") ?></h3>
<div class="inside wow-admin" style="display: block;">	
<div class="wow-admin-col">
<div class="wow-admin-col-3">
<select name="type_signup" onclick="wptype();" id="singnup">
<option value="1" <?php if($type_signup=='1') { echo 'selected="selected"'; } ?>><?php esc_attr_e("limited signup + viral sharing", "wow-marketings") ?></option>
<option value="2" <?php if($type_signup=='2') { echo 'selected="selected"'; } ?>><?php esc_attr_e("limited signup", "wow-marketings") ?></option>
<option value="3" <?php if($type_signup=='3') { echo 'selected="selected"'; } ?>><?php esc_attr_e("simple signup + viral sharing", "wow-marketings") ?></option>
<option value="4" <?php if($type_signup=='4') { echo 'selected="selected"'; } ?>><?php esc_attr_e("simple signup", "wow-marketings") ?></option>
</select>
</div>
<div class="wow-admin-col-9"></div>
</div>
</div>
</div>
<div class="wowbox">
<h3><?php esc_attr_e("Signup", "wow-marketings") ?></h3>
<div class="inside wow-admin" style="display: block;">	
<div class="wow-admin-col" id="limited">
<div class="wow-admin-col-3"><?php esc_attr_e("Number of invites", "wow-marketings") ?>:<br/>
<input type="text" name="number_invites" value="<?php echo ( $number_invites ); ?>" />
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Invites taken", "wow-marketings") ?>:<br/>
<input type="text" name="number_taken" value="<?php echo ( $number_taken ); ?>" /><br/>
<div style="width:80%"><?php esc_attr_e("You can specify the slots that have already been 'taken', to demonstrate social proof", "wow-marketings") ?></div>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("First text", "wow-marketings") ?>:<br/>
<input type="text" name="first_text" value="<?php echo ( $first_text ); ?>" />
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Second text", "wow-marketings") ?>:<br/>
<input type="text" name="second_text" value="<?php echo ( $second_text ); ?>" />
</div>
</div>
<div class="wow-admin-col">
<div class="wow-admin-col-6 signup"><?php esc_attr_e("Confirmation text", "wow-marketings") ?>:<br/>
<textarea name="confirmation_text" class="input-6"><?php echo ( $confirmation_text ); ?></textarea>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Placeholder text", "wow-marketings") ?>:<br/>
<input type="text" name="placeholder_text" value="<?php if(empty($placeholder_text)){echo "Type your email...";}else{echo $placeholder_text;}?>" />
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Button text", "wow-marketings") ?>:<br/>
<input type="text" name="button_text" value="<?php echo ( $button_text ); ?>" />
</div>
</div>
</div>
</div>
<div class="wowbox" id="social">
<h3><?php esc_attr_e("Sharing", "wow-marketings") ?></h3>
<div class="inside wow-admin" style="display: block;">
<div class="wow-admin-col">
<div class="wow-admin-col-6 signup"><?php esc_attr_e("Call to share text", "wow-marketings") ?>:<br/>
<textarea name="share_text" class="input-6"><?php echo ( $share_text ); ?></textarea>
</div>	
<div class="wow-admin-col-6 signup"><?php esc_attr_e("Twitter share text", "wow-marketings") ?>:<br/>
<textarea name="twitter_text" class="input-6"><?php echo ( $twitter_text ); ?></textarea>
</div>
</div>
<div class="wow-admin-col">
<div class="wow-admin-col-3"><?php esc_attr_e("Share link", "wow-marketings") ?>:<br/>
<input type="text" name="share_link" value="<?php echo ( $share_link ); ?>" />
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Specify anchor (Optional)", "wow-marketings") ?>:<br/>
<input type="text" name="specify_anchor" value="<?php echo ( $specify_anchor ); ?>" />
<br/><?php esc_attr_e("Example: #anchor-link", "wow-marketings") ?>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Referrals required", "wow-marketings") ?>:<br/>
<input type="text" name="referrals" value="<?php echo ( $referrals ); ?>" />
</div>	
<div class="wow-admin-col-3"><?php esc_attr_e("Block user from singup", "wow-marketings") ?>:<br/>
<input type="text" name="block_user" value="<?php echo ( $block_user ); ?>" /><br/>
<div style="width:80%"><?php esc_attr_e("Specify the amount of days the user will not be allowed to enter additional emails (to eliminate cheating). Minimum 1 day.", "wow-marketings") ?></div>
</div>	
</div>
<div class="wow-admin-col">
<div class="wow-admin-col-3"><?php esc_attr_e("Lead directly to the form", "wow-marketings") ?>: <input name="directly" type="checkbox" id="toform" value="1" <?php if($directly=='1') { echo 'checked="checked"'; } ?>>
</div>
<div class="wow-admin-col-12"><?php esc_attr_e("Facebook sharing", "wow-marketings") ?>:<br/>
<?php esc_attr_e("Facebook uses your site's regular metadata or facebook specific metadata", "wow-marketings") ?><br/>
&#60;meta property="og:locale" content="en_US" /&#62;<br/>
&#60;meta property="og:type" content="website" /&#62;<br/>
&#60;meta property="og:title" content="" /&#62;<br/>
&#60;meta property="og:url" content="" /&#62;<br/>
&#60;meta property="og:site_name" content="" /&#62;<p>
<?php esc_attr_e("If you want to use a custom text, you can enable it, and you will need to setup a FB app with your link and specify the App ID below.", "wow-marketings") ?> <a href="https://www.youtube.com/watch?v=CUdxiFvKm68&index=8&list=PL5MfSKnqm_OcORWmXwY6w0wsadhc0qloH" target="_blank">See instructions</a>
</div>	
<div class="wow-admin-col-6"><?php esc_attr_e("Enable FB custom share text", "wow-marketings") ?>:<input name="custom_share_text" type="checkbox" id="appid" value="1" <?php if($custom_share_text=='1') { echo 'checked="checked"'; } ?> onclick="wpcalc();">
</div>
<div class="wow-admin-col-6"><?php esc_attr_e("Integration", "wow-marketings") ?>: <input name="integration" onclick="insertservise();" type="checkbox" value="1" <?php if(!empty($integration)) { echo 'checked="checked"'; } ?>></div>	
</div>
<div class="wow-admin-col" id="app_block">
<div class="wow-admin-col-6"><?php esc_attr_e("Facebook share text", "wow-marketings") ?>:<br/>
<textarea name="facebook_share_text" class="input-6"><?php echo ( $facebook_share_text ); ?></textarea>
</div>	
<div class="wow-admin-col-6"><?php esc_attr_e("Facebook app id", "wow-marketings") ?>:<br/>
<input type="text" name="fb_app_id" value="<?php echo ( $fb_app_id ); ?>" class="input-6"/>
</div>	
</div>
</div>
</div>

<div class="wowbox" id="integration">    
    <h3><?php esc_attr_e("Email integration", "wow-marketings") ?></h3>
    <div class="inside wow-admin" style="display: block;">		
	<div class="wow-admin-col">
	<div class="wow-admin-col-3 fieldform"><?php esc_attr_e("Service", "wow-marketings") ?>: <br/>
	<select name='choosservice' onchange="chooseservice();">
        <option value="mailchimp" <?php if($choosservice=='mailchimp' || $choosservice=="") { echo 'selected="selected"'; } ?>><?php esc_attr_e("MailChimp", "wow-marketings") ?></option> 
		<option value="getresponse" <?php if($choosservice=='getresponse') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Getresponse", "wow-marketings") ?></option>		
    </select><br />
	Don't have account? <span id="registr"></span>
	</div>
	<div class="wow-admin-col-3 wow-mailchimp"><?php esc_attr_e("API", "wow-marketings") ?>:<br/>
	<input type='text' placeholder="" name='mailchimp_api' value="<?php echo $mailchimp_api; ?>"/></div>
	<div class="wow-admin-col-3 wow-mailchimp"><?php esc_attr_e("List ID", "wow-marketings") ?>:<br/>
	<input type='text' placeholder="" name='mailchimp_list' value="<?php echo $mailchimp_list; ?>"/></div>

	<div class="wow-admin-col-3 wow-getresponse"><?php esc_attr_e("API", "wow-marketings") ?>:<br/>
	<input type='text' placeholder="" name='getresponse_api' value="<?php echo $getresponse_api; ?>"/></div>
	<div class="wow-admin-col-3 wow-getresponse"><?php esc_attr_e("TOKEN", "wow-marketings") ?>:<br/>
	<input type='text' placeholder="" name='getresponse_list' value="<?php echo $getresponse_list; ?>"/></div>
	
	</div>
	</div>
	</div>




<div class="wowbox">
<h3><?php esc_attr_e("Style", "wow-marketings") ?></h3>
<div class="inside wow-admin" style="display: block;">	
<div class="wow-admin-col">
<div class="wow-admin-col-3"><?php esc_attr_e("Position", "wow-marketings") ?>:<br/>
<select name="position">
<option value="1" <?php if($position=='1') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Left", "wow-marketings") ?></option>
<option value="2" <?php if($position=='2') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Center", "wow-marketings") ?></option>
<option value="3" <?php if($position=='3') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Right", "wow-marketings") ?></option>
</select>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Alignment", "wow-marketings") ?>:<br/>
<select name="alignment">
<option value="left" <?php if($alignment=='left') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Left", "wow-marketings") ?></option>
<option value="center" <?php if($alignment=='center') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Center", "wow-marketings") ?></option>
<option value="right" <?php if($alignment=='right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Right", "wow-marketings") ?></option>
</select>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("First text size", "wow-marketings") ?>:<br/>
<input type="text" name="first_text_size" value="<?php echo ( $first_text_size ); ?>" placeholder="24"/> px
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Second text size", "wow-marketings") ?>:<br/>
<input type="text" name="second_text_size" value="<?php echo ( $second_text_size ); ?>" placeholder="24" /> px
</div>
</div>
<div class="wow-admin-col">
<div class="wow-admin-col-3"><?php esc_attr_e("Link text size", "wow-marketings") ?>:<br/>
<input type="text" name="link_size" value="<?php echo ( $link_size ); ?>" placeholder="12" /> px
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Confirmation first text size", "wow-marketings") ?>:<br/>
<input type="text" name="confirmation_first_size" value="<?php echo ( $confirmation_first_size ); ?>" placeholder="24" /> px
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Confirmation second text size", "wow-marketings") ?>:<br/>
<input type="text" name="confirmation_second_size" value="<?php echo ( $confirmation_second_size ); ?>" placeholder="24" /> px
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Confirmation text size", "wow-marketings") ?>:<br/>
<input type="text" name="confirmation_text_size" value="<?php echo ( $confirmation_text_size ); ?>" placeholder="16" /> px
</div>
</div>
<div class="wow-admin-col">
<div class="wow-admin-col-3"><?php esc_attr_e("Button text size", "wow-marketings") ?>:<br/>
<input type="text" name="button_text_size" value="<?php echo ( $button_text_size ); ?>" placeholder="16" /> px
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("First text color", "wow-marketings") ?>:<br/>
<input type='text' placeholder="#58c486" class="wp-color-picker-field" data-alpha="true" name='first_text_color' value="<?php if(empty($first_text_color)){echo "#58c486";}else{echo $first_text_color;}?>"/></div>
<div class="wow-admin-col-3"><?php esc_attr_e("Second text color", "wow-marketings") ?>:<br/>
<input type='text' placeholder="#4e4e4e" class="wp-color-picker-field" data-alpha="true" name='second_text_color' value="<?php if(empty($second_text_color)){echo "#4e4e4e";}else{echo $second_text_color;}?>"/>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Confirmation first text color", "wow-marketings") ?>:<br/>
<input type='text' placeholder="#4e4e4e" class="wp-color-picker-field" data-alpha="true" name='confirmation_first_text_color' value="<?php if(empty($confirmation_first_text_color)){echo "#4e4e4e";}else{echo $confirmation_first_text_color;}?>"/>
</div>
</div>
<div class="wow-admin-col">
<div class="wow-admin-col-3"><?php esc_attr_e("Confirmation second text color", "wow-marketings") ?>:<br/>
<input type='text' placeholder="#58c486" class="wp-color-picker-field" data-alpha="true" name='confirmation_second_text_color' value="<?php if(empty($confirmation_second_text_color)){echo "#58c486";}else{echo $confirmation_second_text_color;}?>"/>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Confirmation text color", "wow-marketings") ?>:<br/>
<input type='text' placeholder="#4e4e4e" class="wp-color-picker-field" data-alpha="true" name='confirmation_text_color' value="<?php if(empty($confirmation_text_color)){echo "#4e4e4e";}else{echo $confirmation_text_color;}?>"/>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Button text color", "wow-marketings") ?>:<br/>
<input type='text' placeholder="#ffffff" class="wp-color-picker-field" data-alpha="true" name='button_text_color' value="<?php if(empty($button_text_color)){echo "#ffffff";}else{echo $button_text_color;}?>"/>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Button color", "wow-marketings") ?>:<br/>
<input type='text' placeholder="#58c486" class="wp-color-picker-field" data-alpha="true" name='button_color' value="<?php if(empty($button_color)){echo "#58c486";}else{echo $button_color;}?>"/>
</div>
</div>
<div class="wow-admin-col">
<div class="wow-admin-col-3"><?php esc_attr_e("Button hover color", "wow-marketings") ?>:<br/>
<input type='text' placeholder="#51b77c" class="wp-color-picker-field" data-alpha="true" name='button_hover_color' value="<?php if(empty($button_hover_color)){echo "#51b77c";}else{echo $button_hover_color;}?>"/>
</div>
<div class="wow-admin-col-3"><?php esc_attr_e("Button disabled color", "wow-marketings") ?>:<br/>
<input type='text' placeholder="#e5e5e5" class="wp-color-picker-field" data-alpha="true" name='button_disabled_color' value="<?php if(empty($button_disabled_color)){echo "#e5e5e5";}else{echo $button_disabled_color;}?>"/>
</div>
<div class="wow-admin-col-6"></div>
</div>
</div>
</div>
	<?php submit_button($btn); ?>
	<div class="submit-right"><input type="submit" name="submit" id="submit" class="sub" value="<?php echo $btn; ?>"  /><?php  if ($act == "update") { ?> <input type="button" id="wow-preview-button" class="preview" value="<?php esc_attr_e("Preview", "wow-marketings") ?>"  /><?php } ?></div>
    <input type="hidden" name="addwow" value="<?php echo $hidval; ?>" />    
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	<input type="hidden" name="wowpage" value="<?php echo $wowpage; ?>" />
	<input type="hidden" name="wowtable" value="<?php echo $table_wow_signup; ?>" />
	<input type="hidden" name="plugdir" value="<?php echo WOW_SIGNUP_PLUGIN_BASENAME; ?>" />	
	<?php wp_nonce_field('wow_action','wow_nonce_field'); ?>
  </form>


<div id="wow-preview-overlay">
<div id="wow-preview-overclose"></div>
<div id="wow-preview-window" style="display: none;">
<div id="wow-preview-close">X</div>
<?php  if ($act == "update") { 
include ('preview/preview.php');}
 ?>
 </div>
</div>