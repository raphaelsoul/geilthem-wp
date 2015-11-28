<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php 
	echo bloginfo('name');
	//echo wp_title();
	if (is_home()==true) {
		echo " | home";
	} 
	else {
		echo " | ",wp_title();
	}
	?></title>

	<!--META-->
	<?php wp_head(); // wp_head ?>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	
	<!--style sheet and script-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
	<div class="temp-meta">this is index.php</div>
	
	<!-- START header -->
	<?php get_header(); ?>
	<!-- END header -->

	<!-- START sidebar -->
	<?php get_sidebar(); ?>
	<!-- END sidebar -->

	<main>
	I am main
	</main>

	<!-- START footer -->
	<?php get_footer(); ?>
	<!-- END footer -->
</body>
</html>