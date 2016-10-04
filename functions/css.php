<?php
add_action('admin_head', 'wpab_admin_css');
function wpab_admin_css() {
	?>
	<style>
	.wpab_admin textarea, .wpab_admin input[type=text] {
    	max-width: 100%;
    	width: 400px;
	}
	.wpab_admin textarea {
    	min-height: 100px;
	}
	</style>
	<?php
}

?>