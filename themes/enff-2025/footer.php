<footer>
	<div class="footer-bottom">
		<span>{{ copyright }}</span>
	</div>
	<?php
	wp_nav_menu(
		array(
			'menu' => 'footer',
			'container' => '',
			'theme_location' => 'footer',
			'items_wrap' => '<ul class="footer-top">%3$s</ul>'
		)
	);
	?>
</footer>

<!-- =Wrapper end -->
<!-- </div> -->

<?php wp_footer(); ?>

</body>

</html>