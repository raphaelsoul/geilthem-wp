<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Starter Kit</title>

    <!-- Add to homescreen -->
    <link rel="manifest" href="manifest.json">

    <!-- Fallback to homescreen for Chrome <39 on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Web Starter Kit">
    <link rel="icon" sizes="192x192" href="<?php echo bloginfo('template_url') . '/assets/plugins/wsk/images/touch/chrome-touch-icon-192x192.png'; ?>">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="<?php echo bloginfo('template_url') . '/assets/plugins/wsk/images/touch/apple-touch-icon.png'; ?>">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="<?php echo bloginfo('template_url') . '/assets/plugins/wsk/images/touch/ms-touch-icon-144x144-precomposed.png'; ?>">
    <meta name="msapplication-TileColor" content="#3372DF">

    <meta name="theme-color" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- Page styles -->
    <?php wp_head(); // wp_head ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  </head>
  <body>
    <header class="app-bar promote-layer">
      <div class="app-bar-container">
        <button class="menu"><img src="<?php echo bloginfo('template_url') . '/assets/plugins/wsk/images/hamburger.svg'; ?>" alt="Menu"></button>
        <h1 class="logo">Web <strong>Starter Kit</strong></h1>
        <section class="app-bar-actions">
        <!-- Put App Bar Buttons Here -->
        <!-- e.g <button><i class="icon icon-star"></i></button> -->
        </section>
      </div>
    </header>