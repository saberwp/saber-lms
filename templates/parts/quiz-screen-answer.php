<template id="quiz-screen-answer-template">

	<div class="max-w-2xl mx-auto">
		<h1 id="question-text" class="font-semibold text-2xl mb-8"></h1>
		<div class="bg-emerald-100 p-8 flex flex-col gap-4">
			<ul id="question-answer-list" class="answer-list"></ul>
		</div>
		<div class="flex justify-between items-center">
			<button id="quiz-answer-button" class="block my-4 w-40 bg-emerald-800 text-white rounded-md py-3 px-8 font-medium text-lg hover:bg-emerald-700">
				ANSWER
			</button>
			<div id="quiz-answer-result" class="font-bold text-2xl text-gray-500"></div>
	</div>

	<div class="my-8 flex gap-4">
		<button id="quiz-previous-button" class="w-32 bg-gray-800 text-white rounded-md py-2 px-6 font-medium hover:bg-gray-700">
			<span>PREVIOUS</span>
		</button>
		<button id="quiz-next-button" class="w-32 bg-gray-800 text-white rounded-md py-2 px-6 font-medium hover:bg-gray-700">
			<span>NEXT</span>
		</button>
		<button id="quiz-review-button" class="w-32 bg-gray-800 text-white rounded-md py-2 px-6 font-medium hover:bg-gray-700">
			<span>REVIEW</span>
		</button>
	</div>

</template>
