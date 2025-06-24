<div class="home text-center">

	<?php
	wp_nav_menu(
		array(
			'menu' => 'top',
			'container' => '',
			'theme_location' => 'top',
		)
	);
	?>

	<?php dynamic_sidebar('home-nav'); ?>

</div>