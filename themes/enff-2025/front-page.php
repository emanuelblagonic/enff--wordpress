<?php get_header(); ?>

<?php //dynamic_sidebar('image'); ?>

<div class="welcome-text" id="homepage-welcome">
  <p>Our 17th edition: five days celebrating the best of today's cinema from across broader Eastern Europe — with focus sections, panels, Q&A's, wine tastings, the New Talents Competition, a youth film, classics and  film art and much more. An outstanding programme in a vibrant social setting — join us at Filmhuis Den Haag! A festival of different voices, bold visions and shared histories.</p>
</div>

<?php get_template_part('partials/sections/section--news--homepage'); ?>

<section class="content-section">
	<!-- <div class="gradient-top"></div> -->
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
  <div class="survey-wrapper">
    <a href="https://forms.gle/LubMqcTAb1ggD8Qf8" class="button">Take the festival survey</a>
  </div>
	<div class="newsletter-wrapper">
		<h2>ENFF Newsletter</h2>
		<?php dynamic_sidebar('newsletter'); ?>
	</div>
	<div class="gradient-bottom"></div>
</section>

<?php //get_template_part('partials/sections/section--news'); ?>


<?php get_footer(); ?>