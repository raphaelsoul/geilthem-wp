<?php

//引入mdl
function intro_mdl() {
	wp_register_style('mdl-style',get_template_directory_uri() . '/assets/plugins/mdl/material.min.css',false,false,false);
	wp_register_style('mdl-custom',get_template_directory_uri() . '/assets/plugins/mdl/custom.css',false,false,false);
	wp_register_script('mdl-script',get_template_directory_uri() . '/assets/plugins/mdl/material.min.js',false,false,false);
	
	//intro source at front end
	if(!is_admin()) {
		wp_enqueue_style('mdl-style');
		wp_enqueue_style('mdl-custom');
		wp_enqueue_script('mdl-script');
	}
}
add_action('init','intro_mdl');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

//移除google字体
function remove_open_sans_from_wp_core() {
	wp_deregister_style( 'open-sans' );   
	wp_register_style( 'open-sans', false );   
	wp_enqueue_style('open-sans','');
}
add_action('init','remove_open_sans_from_wp_core');


