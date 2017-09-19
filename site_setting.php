<div class="wrap">
<h2>Footer Settings</h2>
<form method="post" action="options.php">
    <?php settings_fields( 'my_footer_settings' ); ?>
    <?php do_settings_sections( 'my_footer_settings' ); ?>
		<table class="form-table">

			<!-- <tr valign="top">
				<th scope="row">Title</th>
				<td><input type="text" name="site_title" value="<?php echo esc_attr( get_option('site_title') ); ?>" /></td>
			</tr> -->

			<tr valign="top">
				<th scope="row">Phone Number 1</th>
				<td><input type="text" name="phone1" value="<?php echo esc_attr( get_option('phone1') ); ?>" /></td>
			</tr>

			<tr valign="top">
				<th scope="row">Phone Number 2</th>
				<td><input type="text" name="phone2" value="<?php echo esc_attr( get_option('phone2') ); ?>" /></td>
			</tr>

			<tr valign="top">
				<th scope="row">Phone Number 3</th>
				<td><input type="text" name="phone3" value="<?php echo esc_attr( get_option('phone3') ); ?>" /></td>
			</tr>

			<tr valign="top">
				<th scope="row">Email ID</th>
				<td><input type="text" name="email" value="<?php echo esc_attr( get_option('email') ); ?>" /></td>
			</tr>

			<tr valign="top">
				<th scope="row">Address</th>
				<td><textarea name="address"><?php echo esc_attr( get_option('address') ); ?></textarea></td>
			</tr>
			
			<tr valign="top">
				<th scope="row">Facebook Link</th>
				<td><input type="text" name="facebook" value="<?php echo esc_attr( get_option('facebook') ); ?>" /></td>
			</tr>
			
			<tr valign="top">
				<th scope="row">Twitter Link</th>
				<td><input type="text" name="twitter" value="<?php echo esc_attr( get_option('twitter') ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row">Skype</th>
				<td><input type="text" name="skype" value="<?php echo esc_attr( get_option('skype') ); ?>" /></td>
			</tr>
			<!-- <tr valign="top">
				<th scope="row">Google Plus Link</th>
				<td><input type="text" name="google" value="<?php echo esc_attr( get_option('google') ); ?>" /></td>
			</tr>

			<tr valign="top">
				<th scope="row">Linkedin Link</th>
				<td><input type="text" name="linkedin" value="<?php echo esc_attr( get_option('linkedin') ); ?>" /></td>
			</tr>

			<tr valign="top">
				<th scope="row">Instagram Link</th>
				<td><input type="text" name="instagram" value="<?php echo esc_attr( get_option('instagram') ); ?>" /></td>
			</tr>

			<tr valign="top">
				<th scope="row">Youtube Link</th>
				<td><input type="text" name="youtube" value="<?php echo esc_attr( get_option('youtube') ); ?>" /></td>
			</tr> -->

			<tr valign="top">
				<th scope="row">Dribbble Link</th>
				<td><input type="text" name="dribbble" value="<?php echo esc_attr( get_option('dribbble') ); ?>" /></td>
			</tr>
			
			<!--<tr valign="top">
				<th scope="row">Video Gallery Link</th>
				<td><input type="text" name="gallery_link" value="<?php echo esc_attr( get_option('gallery_link') ); ?>" /></td>
			</tr>-->
		</table>    
    <?php submit_button(); ?>
</form>
</div>
