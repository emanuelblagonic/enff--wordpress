<?php get_header(); ?>

<section class="content-section">
	<div class="gradient-top"></div>
	<?php dynamic_sidebar('image'); ?>
	<div class="news">
		<h1>{{ newsTitle }} <span class="stop-news" @click="toggleNewsVisibility"> {{ newsVisible ? '✦' : '✧'}}</span></h1>
		<div class="scroll-news" v-if="newsVisible">
			<?php dynamic_sidebar('news'); ?>
		</div>
	</div>
	<div class="page-container">
		<h1 class="page-heading"><?php the_title();?></h1>
		<?php the_content(); ?>
	</div>
	<div class="newsletter-wrapper">
		<h2>ENFF Newsletter</h2>
		<?php dynamic_sidebar('newsletter'); ?>
	</div>
	<div class="gradient-bottom"></div>
</section>

<?php get_footer(); ?>