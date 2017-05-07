<?php 
	function addReference() {
		if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
			// jquery reference
			wp_enqueue_script('jquery', get_template_directory_uri() . '/jquery-3.2.0.min.js'); // Enqueue it!
			// bootstrap reference
			wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap-3.3.7-dist/css/bootstrap.min.css'); // Enqueue it!
      wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/bootstrap-3.3.7-dist/js/bootstrap.min.js'); // Enqueue it!
			// awesome font reference
			wp_enqueue_style('awesomefont', get_template_directory_uri() . '/icons/fa-470/css/font-awesome.css'); // Enqueue it!
		}
	}
	// Add Actions
	add_action('wp_head', 'addReference'); // Add Custom Scripts to wp_head
?>