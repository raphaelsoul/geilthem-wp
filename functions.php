<?php
//source intro
function geilcode_add_styles() {
	/*register source*/
	wp_register_script('mdl-style',get_template_directory_uri() . '/assets/plugins/mdl/material.indigo-blue.min.css');
	wp_register_script('mdl-script',get_template_directory_uri() . '/assets/plugins/mdl/material.min.js');
	
	/*intro source*/
	if(!is_admin()) {
		wp_enqueue_script('mdl-style');
		wp_enqueue_script('mdl-script');
	}
}

add_action( 'init', 'geilcode_add_styles' );