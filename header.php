<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
	<?php wp_head(); // wp_head ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>