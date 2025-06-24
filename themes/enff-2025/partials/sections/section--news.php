<div class="news">
	<h1>News <span class="stop-news" @click="toggleNewsVisibility"> {{ newsVisible ? '✦' : '✧'}}</span></h1>
	<div class="scroll-news" v-if="newsVisible">
		<?php dynamic_sidebar('news'); ?>
	</div>
</div>
