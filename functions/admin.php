<?php
add_action( 'admin_menu', 'wpab_menu' );

function wpab_menu() {
	add_options_page( 'wpab Options', 'WP Attention Bar', 'manage_options', 'wpab-settings', 'wpab_options' );
	add_action( 'admin_init', 'register_wpab_settings' );
}

function register_wpab_settings() { // whitelist options
	register_setting( 'wpab_settings', 'wpab_formcode' );
	register_setting( 'wpab_settings', 'wpab_custom_css' );
	register_setting( 'wpab_settings', 'wpab_delay' );
	register_setting( 'wpab_settings', 'wpab_title' );
	register_setting( 'wpab_settings', 'wpab_recurring' );
	register_setting( 'wpab_settings', 'wpab_active' );
}

function wpab_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
	<div class="wrap">
		<h2>wpab - WordPress Slider Popup</h2>
		<p>Fill in the options below.</p>
		<form class="wpab_admin" id="wpab_form" method="post" action="options.php"> 
			<?php settings_fields( 'wpab_settings' ); ?>
			<?php do_settings_sections( 'wpab_settings' ); ?>
			

			<p>Switch optin on and off:</p>
			<select name="wpab_active">
				<option value="on" <?php if ( esc_attr( get_option('wpab_active') ) == "on" ) { echo "selected"; }; ?> >On</option>
				<option value="off" <?php if ( esc_attr( get_option('wpab_active') ) != "on" ) { echo "selected"; }; ?> >Off</option>
			<select>
			<p>How long before the optin should show? This is in ms, so 1000 means 1 second.</p>
			<input type="number" name="wpab_delay" value="<?php echo esc_attr( get_option('wpab_delay') ); ?>" />
			<p>Show optin every how many days?</p>
			<input type="number" name="wpab_recurring" value="<?php echo esc_attr( get_option('wpab_recurring') ); ?>" />
			<p>Title of the optin (top text):</p>
			<input type="text" name="wpab_title" value="<?php echo esc_attr( get_option('wpab_title') ); ?>" />
			<p>Form html (you can use any html form here):</p>
			<textarea type="text" name="wpab_formcode"><?php echo esc_attr( get_option('wpab_formcode') ); ?></textarea>
			<p>Custom CSS styles:</p>
			<textarea type="text" name="wpab_custom_css"><?php echo esc_attr( get_option('wpab_custom_css') ); ?></textarea>
			
			
			<?php submit_button(); ?>
		
		</form>
	</div>
</div>

<?php
}
?>