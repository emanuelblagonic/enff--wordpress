<?php get_header(); ?>

<section class="content-section">
	<div class="gradient-top"></div>
	<?php dynamic_sidebar('image'); ?>
	<div class="page-container">
		<h1 class="page-heading"><?php the_title();?></h1>
		<?php the_content(); ?>
	</div>
	<div class="gradient-bottom"></div>
</section>

<?php get_template_part('partials/sections/section--newsletter'); ?>
<?php get_template_part('partials/sections/section--news'); ?>

<?php get_footer(); ?>