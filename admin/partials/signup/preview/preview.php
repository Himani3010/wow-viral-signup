<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="wow-signup signup">
<div id="signup" class="arr-signup">
<?php if ($type_signup == 1 || $type_signup == 2) {; ?>
	<p><span><?php echo ( $number_invites - $number_taken ); ?> <?php echo ( $first_text ); ?></span> <?php echo ( $second_text ); ?> <?php echo ( $number_invites ); ?></p>
<?php }; ?>	
		<input type="email" class="signmail" onblur="if (this.value == '') this.value = 'Type your email..';" onfocus="if (this.value == 'Type your email..') this.value = '';" value="Type your email..">		
		<button onclick="mpwsignup(<?php echo $id; ?>);" id="button-singnup"><?php echo ( $button_text ); ?></button>
	<p><div class="err" id="err"></div></p>
	<input type="hidden" id="toform" value="<?php echo ( $directly ); ?>">
	</div>
	<div class="success show">
	<?php if ($type_signup == 1 || $type_signup == 2) {; ?>
	<div class="limitedtext">
	<p><span><?php echo ( $number_invites - $number_taken - 1 ); ?> <?php echo ( $first_text ); ?></span> <?php echo ( $second_text ); ?> <?php echo ( $number_invites ); ?></p>	
	</div>
	<?php }; ?>	
		<p><?php echo ( $confirmation_text ); ?><p>
		<?php if ($type_signup == 1 || $type_signup == 3) {; ?>
		<p><?php echo ( $share_text ); ?></p>		
		<a onclick="Share.facebook('URL','TITLE','IMG_PATH','DESC')" class="shareBtn fb">Share</a>
		<a onclick="Share.twitter('URL','TITLE')" class="shareBtn tw">Tweet</a>
		<p>Your link:<br/>
		<span id="yourlink"></span>
		</p>
		<?php }; ?>
	</div>
</div>
<style>
.wow-signup { display: block; font-family: Open Sans, Helvetica, Myriad Pro, sans-serif; width: 370px; } 
.wow-signup form { margin:0; padding:0; } 
.wow-signup p { line-height: 28px; margin:0; padding:0; margin-top:7px; }
.wow-signup input { -webkit-appearance: none; -moz-appearance: none; appearance: none; box-sizing: content-box; width: 353px; height: 62px; line-height: 60px; border-radius: 3px; border: 1px solid #9C9C9C; background: #f4f4f4; margin-top: 13px; padding: 0px; padding-left: 15px; font-family: Open Sans, Helvetica, Myriad Pro, sans-serif; font-size: 16px; letter-spacing: -0.7px; text-align: left; outline: none; }
.wow-signup button { -webkit-appearance: none; -moz-appearance:    none; appearance:         none; display: block; box-sizing: content-box; width: 370px; height: 60px; margin-top:15px; line-height: 60px; border-radius: 3px; border:0; font-family: Open Sans, Helvetica, Myriad Pro, sans-serif; outline:none; padding: 0; cursor: pointer; }
.wow-signup .success p { margin-top:10px; line-height:28px; }
.wow-signup .success .limitedtext p { line-height: 28px; margin:0; padding:0; margin-top:7px; }
.shareBtn { display: inline-block; box-sizing: content-box; width:65px; height:48px; line-height:48px; padding-left:50px; border-radius: 3px; font-size:16px; text-decoration:none; margin-top:17px; margin-right:10px; cursor: pointer; text-align: left; } .wow-signup .fb { background:url(fb.png) no-repeat 20px center #5d82d1; color:#fff; }
.wow-signup .fb:active { background-color:#4d70bc; color:#fff; }
.wow-signup .tw { background:url(tw.png) no-repeat 15px center #40bff5; color:#fff; }
.wow-signup .tw:active { background-color:#36abdc; color:#fff; }
.err {color:#a03717;}
.signup p { font-size: <?php if(empty($second_text_size )){echo "24";}else{echo $second_text_size;}?>px; color: <?php if(empty($second_text_color )){echo "#4e4e4e";}else{echo $second_text_color;}?>; }
.signup span { font-size: <?php if(empty($first_text_size )){echo "24";}else{echo $first_text_size;}?>px; color: <?php if(empty($first_text_color )){echo "#58c486";}else{echo $first_text_color;}?>; }
.signup .success .limitedtext p { font-size: <?php if(empty($confirmation_second_size )){echo "24";}else{echo $confirmation_second_size;}?>px; color: <?php if(empty($confirmation_second_text_color )){echo "#58c486";}else{echo $confirmation_second_text_color;}?>; }
.signup .success .limitedtext span {  font-size: <?php if(empty($confirmation_first_size )){echo "24";}else{echo $confirmation_first_size;}?>px; color: <?php if(empty($confirmation_first_text_color )){echo "#58c486";}else{echo $confirmation_first_text_color;}?>; }
.signup .success p { font-size: <?php if(empty($confirmation_text_size )){echo "16";}else{echo $confirmation_text_size;}?>px; color: <?php if(empty($confirmation_text_color )){echo "#4e4e4e";}else{echo $confirmation_text_color;}?>; }
.signup button { font-size: <?php if(empty($button_text_size )){echo "16";}else{echo $button_text_size;}?>px; color:<?php if(empty($button_text_color )){echo "#ffffff";}else{echo $button_text_color;}?>; background: <?php if(empty($button_color )){echo "#58c486";}else{echo $button_color;}?>; }
.signup button:hover { background:<?php if(empty($button_hover_color )){echo "#51b77c";}else{echo $button_hover_color;}?>; cursor:pointer}
.signup button:disabled { background:#<?php if(empty($button_disabled_color )){echo "#e5e5e5";}else{echo $button_disabled_color;}?>; cursor: default; text-align: 2; }
.signup { <?php if($position== 2){echo 'margin: 0 auto;';} if($position== 3){echo 'margin-left: auto;';} if($position== 1 || $position== "") {echo 'margin: 0;';}; ?>; text-align: <?php if(empty($alignment )){echo "left";}else{echo $alignment;}?>; }
#yourlink {font-size: <?php if(empty($link_size )){echo "12";}else{echo $link_size;}?>px;}
</style>