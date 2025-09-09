<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <meta property="og:url" content="https://easternneighboursfilmfestival.nl/">
    <meta property="og:site_name" content="© 2006 - <?php echo date('Y'); ?> Eastern Neighbours Film Festival">
    
    <?php 
      // Title
      $social_media_title = get_field('option__social_media_title', 'option') ?: get_bloginfo('name');
    
      echo '<meta property="og:title" content="' . esc_attr($social_media_title) . '">';
      echo '<meta name="twitter:title" content="' . esc_attr($social_media_title) . '">';
    
      // Image
      $social_media_image = get_field('option__social_media_image', 'option');
      if ($social_media_image) {
        echo '<meta property="og:image" content="' . esc_url($social_media_image) . '">';
        echo '<meta name="twitter:image" content="' . esc_url($social_media_image) . '">';
        echo '<meta name="twitter:card" content="summary_large_image">';
        echo '<meta name="twitter:image:alt" content="' . esc_attr($social_media_title) . '">';
      }
    
      // Description
      $social_media_description = get_field('option__social_media_description', 'option');
      if ($social_media_description) {
        echo '<meta property="og:description" content="' . esc_attr($social_media_description) . '">';
        echo '<meta name="twitter:description" content="' . esc_attr($social_media_description) . '">';
        echo '<meta name="description" content="' . esc_attr($social_media_description) . '">';
      }
    ?>
		<meta property="og:type" content="article" />
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
          <?php if (get_field('option__website_tagline', 'option')) : ?>
            <p class="website-tagline"><?php echo get_field('option__website_tagline', 'option'); ?></p>
          <?php endif; ?>
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