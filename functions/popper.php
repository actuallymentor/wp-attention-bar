<?php

function wpab_functionality() {
	global $wpab_config;
	?>
	<?php if ( is_single() ): ?>
		<div id="wpab_box" class="row">
			<p id="wpab_title" class="col l5 m5 s12"><?php echo $wpab_config['wpab_title']; ?></p>
			<div class="col offset-l1 offset-m1 l6 m6 s12"><?php echo $wpab_config['wpab_formcode']; ?></div>
			<a id="wpab_close">[X]</a>
		</div>
		<style>
			#wpab_close {
				position: fixed;
				bottom: 15px;
				right: 20px;
				color: white;
				z-index: 99;
			}
			#wpab_close:hover {
				color: white!important;
			}
			#wpab_box {
				display: none;
				width: 100%;
				background-color: #2196f3;
				color: white;
				padding: 5px;
				box-shadow: 0 2px 5px 5px rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
				opacity: 0.9;
				position: fixed;
				bottom: 0;
				left: 0;
				margin: 0;
			}
			#wpab_box p, #wpab_box form {
				margin: 0;
				padding: 10px;
			}
			#wpab_box #wpab_title {
				text-align: right;
			}
			#wpab_box form {
				text-align: left;
			}
			<?php echo $wpab_config['wpab_custom_css']; ?>
		</style>



		<script>
			var wpab_slidein = {
				delay: <?php echo $wpab_config['wpab_delay']; ?>,
				expires: <?php echo $wpab_config['wpab_recurring']; ?>
			}
		</script>

	<?php endif ?>

	<?php
}
if ( ($wpab_config['wpab_active'] == "on") && !$_COOKIE['wpab_silent'] ) {
	add_action( 'wp_footer', 'wpab_functionality' );
}
?>
