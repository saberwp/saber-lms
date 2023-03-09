<template id="quiz-screen-start-template">
	<h1 class="font-bold text-2xl mb-4">
		<?php the_title(); ?>
	</h1>
	<div class="text-gray-800 my-4">
		<?php the_content(); ?>
	</div>
	<button id="quiz-start-button" class="w-56 bg-gray-800 text-white rounded-md py-3 px-8 font-medium hover:bg-gray-700">
		<span>
			START QUIZ
		</span>
	</button>
</template>
