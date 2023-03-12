<template id="quiz-screen-review-template">

	<!-- Header with quiz title and question count. -->
	<header class="pl-8">

		<h1 class="font-bold text-2xl mb-0 font-semibold text-gray-800">
			<?php the_title(); ?>
		</h1>
		<h2 class="text-gray-400 font-semibold text-lg">
			10 Questions
		</h2>

	</header>

	<div class="flex gap-8 pl-8">

		<!-- Left side buttons. -->
		<div class="basis-3/12 flex flex-col gap-2 py-6">

			<!-- COntinue button. -->
			<button id="quiz-continue-button" class="block w-56 bg-gray-800 text-white rounded-md py-3 px-8 font-medium hover:bg-gray-700">
				<span>
					CONTINUE QUIZ
				</span>
			</button>

			<!-- Restart button. -->
			<button id="quiz-restart-button" class="block w-56 bg-gray-800 text-white text-base rounded-md py-1 px-8 font-medium hover:bg-gray-700">
				<span>
					RESTART QUIZ
				</span>
			</button>

			<!-- Exit button. -->
			<button id="quiz-exit-button" class="block w-56 bg-gray-800 text-white text-base rounded-md py-1 px-8 font-medium hover:bg-gray-700">
				<span>
					EXIT QUIZ
				</span>
			</button>

		</div><!-- End of buttons left side. -->

		<!-- Report body content. -->
		<div class="basis-9/12">

			<!-- Large Stats, Row 1 -->
			<section class="flex flex-wrap">

				<!-- Correct Questions Stat -->
				<div class="basis-1/3 p-4 my-0 flex flex-col gap-2 items-center">
					<div class="text-4xl font-bold text-gray-800">
						<span id="quiz-report-correct">0</span>/<span id="quiz-report-answer-count">0</span>
					</div>
					<h2 class="text-lg font-semibold text-gray-800 text-center">Correct Questions</h2>
				</div>

				<!-- Score Percentage Stat -->
				<div class="basis-1/3 p-4 my-0 flex flex-col gap-2 items-center">
					<div class="text-4xl font-bold text-gray-800">
						88%
					</div>
					<h2 class="text-lg font-semibold text-gray-800 text-center">Score Percentage</h2>
				</div>

				<!-- Pass/Fail Stat -->
				<div class="basis-1/3 p-4 my-0 flex flex-col gap-2 items-center">
					<div class="text-4xl font-bold text-gray-800">
						FAIL
					</div>
					<h2 class="text-lg font-semibold text-gray-800 text-center">Pass/Fail Result</h2>
				</div>

			</section>

			<!-- Smaller Stats, Row 1 -->
			<section class="flex flex-wrap">

				<!-- Correct Questions Stat -->
				<div class="basis-1/3 p-4 my-0 flex flex-col gap-2 items-center">
					<div class="text-2xl font-bold text-gray-800">
						<span id="quiz-report-answer-count">0</span>
					</div>
					<h2 class="text-base font-semibold text-gray-800 text-center">Questions Answered</h2>
				</div>

				<!-- Score Percentage Stat -->
				<div class="basis-1/3 p-4 my-0 flex flex-col gap-2 items-center">
					<div class="text-2xl font-bold text-gray-800">
						4
					</div>
					<h2 class="text-base font-semibold text-gray-800 text-center">Questions Unanswered</h2>
				</div>

				<!-- Pass/Fail Stat -->
				<div class="basis-1/3 p-4 my-0 flex flex-col gap-2 items-center">
					<div class="text-2xl font-bold text-gray-800">
						2
					</div>
					<h2 class="text-base font-semibold text-gray-800 text-center">Questions Incorrect</h2>
				</div>

			</section>

		</div><!-- End report body content. -->

	</div><!-- End of screen container. -->

</template>
