<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
	<h2><?php esc_attr_e("Plugin License Options", "wow-marketings") ?></h2>		
		<form method="post" action="options.php">
			<?php settings_fields('wow_signup_license'); ?>
			<div class="wowbox"> 
			<table>
				<tbody>
					<tr valign="top">
						<th scope="row" valign="top" width="300">
						  <?php esc_attr_e("License Key", "wow-marketings") ?>
						</th>
						<td>
							<input id="wow_signup_license_key" name="wow_signup_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $license ); ?>" /><br/>
							<label class="description" for="wow_signup_license_key"><?php esc_attr_e("Enter your license key", "wow-marketings") ?></label>
						</td>
					</tr>
					<?php if( false !== $license ) { ?>
						<tr valign="top">
							<th scope="row" valign="top">
							<?php esc_attr_e("Activate License", "wow-marketings") ?>								
							</th>
							<td>
								<?php if( $status !== false && $status == 'valid' ) { ?>
									<span style="color:green;"><?php _e('active'); ?></span><br/>
									<?php wp_nonce_field( 'wow_signup_nonce', 'wow_signup_nonce' ); ?>
									<input type="submit" class="button-secondary" name="wow_signup_license_deactivate" value="<?php esc_attr_e("Deactivate License", "wow-marketings") ?>"/>
								<?php } else {
									wp_nonce_field( 'wow_signup_nonce', 'wow_signup_nonce' ); ?>
									<input type="submit" class="button-secondary" name="wow_signup_license_activate" value="<?php esc_attr_e("Activate License", "wow-marketings") ?>"/>
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
			<?php submit_button(); ?>
		</form>
