<?php 
	function addReference() {
		if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
			// jquery reference
			wp_enqueue_script('jquery', get_template_directory_uri() . '/jquery-3.2.0.min.js'); // Enqueue it!
			// bootstrap reference
			wp_enqueue_style('bootstrap', get_template_directory_uri() . '/pure-release-1.0.0/pure-min.css'); // Enqueue it!
			// awesome font reference
			wp_enqueue_style('awesomefont', get_template_directory_uri() . '/icons/fa-470/css/font-awesome.min.css'); // Enqueue it!
			// add style.css reference
			wp_enqueue_style( 'style', get_stylesheet_uri() );
		}
	}
	// Add Actions
	add_action('wp_head', 'addReference'); // Add Custom Scripts to wp_head
?>