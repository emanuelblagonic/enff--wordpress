<?php get_header(); ?>

<div class="news">
	<h1>{{ newsTitle }} <span class="stop-news" @click="toggleNewsVisibility"> {{ newsVisible ? '✦' : '✧'}}</span></h1>
	<div class="scroll-news" v-if="newsVisible">
		<?php dynamic_sidebar('news'); ?>
	</div>
</div>

<section class="content-section">
	<div class="gradient-top"></div>
	<?php dynamic_sidebar('image'); ?>
	<?php dynamic_sidebar('announcements'); ?>

	<!-- specific to front page -->
	<div class="edition-module">
		<?php dynamic_sidebar('latest-edition'); ?>
		<button class="more-movies" id="btn-prev-1"> &#10229; </button>
		<button class="more-movies btn-right" id="btn-next-1"> &#10230; </button>

		<button class="more-movies" id="btn-prev-2"> &#10229; </button>
		<button class="more-movies btn-right" id="btn-next-2"> &#10230; </button>

		<button class="more-movies" id="btn-prev-3"> &#10229; </button>
		<button class="more-movies btn-right" id="btn-next-3"> &#10230; </button>

		<button class="more-movies" id="btn-prev-4"> &#10229; </button>
		<button class="more-movies btn-right" id="btn-next-4"> &#10230; </button>
	</div>
	<div class="trailer-wrapper">
		<?php dynamic_sidebar('trailer'); ?>
	</div>
	<div class="spotlight-wrapper">
		<?php dynamic_sidebar('movie-spotlight'); ?>
	</div>
	<div class="newsletter-wrapper">
		<h2>ENFF Newsletter</h2>
		<?php dynamic_sidebar('newsletter'); ?>
	</div>
	<div class="gradient-bottom"></div>
</section>

<?php get_footer(); ?>