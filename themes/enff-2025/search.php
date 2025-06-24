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
		<h1 class="page-heading">You searched for: <?php echo get_search_query(); ?></h1>

		<ul class="wp-block-latest-posts">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li class="post-thumbnail">
					<a class="wp-block-latest-posts__featured-image" href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>
						<div class="post-title"><?php the_title(); ?></div>
					</a>
				</li>
			<?php endwhile; endif; ?>
		</ul>

	</div>

	
	<div class="newsletter-wrapper">
		<h2>ENFF Newsletter</h2>
		<?php dynamic_sidebar('newsletter'); ?>
	</div>
	<div class="gradient-bottom"></div>
</section>

<!-- <div class="search-results main-container">

</div> -->

<?php get_footer(); ?>