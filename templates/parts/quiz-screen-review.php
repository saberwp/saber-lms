<template id="quiz-screen-review-template">
	<h1 class="font-bold text-2xl mb-4">
		<?php the_title(); ?>
	</h1>

	<!-- Report data. -->
	<div class="text-lg font-bold bg-gray-800 text-white p-4 my-8">
		<div>
			<span id="quiz-report-correct">0</span>/<span id="quiz-report-answer-count">0</span>
		</div>
		<h2 class="text-sm">Correct Questions</h2>
	</div>

	<!-- Restart button. -->
	<button id="quiz-restart-button" class="w-56 bg-gray-800 text-white rounded-md py-3 px-8 font-medium hover:bg-gray-700">
		<span>
			RESTART QUIZ
		</span>
	</button>
</template>
