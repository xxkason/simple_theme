<?php 
	function wphead_test() {
		// if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		// 	// jquery reference
		// 	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
  //     wp_enqueue_script('conditionizr'); // Enqueue it!
		// 	// bootstrap reference
		// 	// awesome font reference
		//}
		?>
        <script>
            alert('Page is loading...');
        </script>
    <?php
	}


	// Add Actions
	add_action('wp_head', 'wphead_test'); // Add Custom Scripts to wp_head
?>