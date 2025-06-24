<?php
	get_header();	
?>	

<section class="content-section"> 
	<div class="gradient-top"></div>
		<div class="news">
			<h1>{{ newsTitle }} <span class="stop-news" @click="toggleNewsVisibility"> {{ newsVisible ? '✦' : '✧'}}</span></h1>
			<div class="scroll-news" v-if="newsVisible">
				<?php dynamic_sidebar('news');?>
			</div>
		</div>
		<article class="single-content">
			<!-- if the post belongs to a film category, check if it has the thumbnail and then at it to the top of the page wooho -->
			<?php if (in_category('Film')) {
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail( 'full' );
				}
			}?>

			<?php
				if( have_posts() ){
					while(have_posts()){
						the_post();
						get_template_part('template-parts/content', 'article');
					}
				}
			?>
		</article>
	<div class="gradient-bottom"></div>
</section>

<?php
	get_footer();
?>	




 