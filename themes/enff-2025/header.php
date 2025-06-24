<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:title" content="Eastern Neighbours Film Festival">
		<meta property="og:type" content="article" />
		<meta property="og:image" content="https://easternneighboursfilmfestival.nl/wp-content/uploads/2024/11/Screenshot-2024-11-11-at-20.46.16.png">
		<meta property="og:url" content="https://easternneighboursfilmfestival.nl/">
		<meta property="og:description" content="Best recent films from East and Southeast Europe! From 27 November - 1 December 2024 in Filmhuis Den Haag.">
		<meta property="og:site_name" content="© 2006 - 2024 Eastern Neighbours Film Festival">
		<meta name="twitter:title" content="Eastern Neighbours Film Festival">
		<meta name="twitter:description" content="Best recent films from East and Southeast Europe! From  From 27 November - 1 December 2024 in Filmhuis Den Haag.">
		<meta name="twitter:image" content="https://easternneighboursfilmfestival.nl/wp-content/uploads/2024/11/Screenshot-2024-11-11-at-20.46.16.png">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:image:alt" content="Eastern Neighbours Film Festival 2024">
		<meta name="description" content="Best recent films from East and Southeast Europe!  From 27 November - 1 December 2024 in Filmhuis Den Haag.">
		<title>Eastern Neighbours Film Festival | Best recent films from East and Southeast Europe!</title>
		<?php wp_head(); ?>
	</head>

	<body>
    
    <!-- =Wrapper start -->
    <!-- <div class="wrapper"> -->
      
		<header>
			<div class="header-top">
				<!-- <h1>{{ mainName }}</h1> -->
        <h1><a href="/">Eastern Neighbours Film Festival</a></h1>
			</div>
      <nav class="header-navigation">
        <a href="#" class="toggle"><span></span>Toggle menu</a>
        <div class="header-bottom">
          <?php
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul class="header">%3$s</ul>'
            )
          );
          ?>
          <div class="search-bar">
            <?php get_search_form(); ?>
          </div>
        </div>
      </nav>
		</header>