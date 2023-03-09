<template id="quiz-screen-answer-template">

	<div class="p-4 max-w-2xl mx-auto">
		<h1 id="question-text" class="font-semibold text-2xl"></h1>
		<div class="bg-green-200 h-40 p-8">
			<ul id="question-answer-list" class="answer-list"></ul>
			<button class="slms-answer-question font-semibold text-white bg-gray-800 rounded-md px-4 py-2">ANSWER</button>
		</div>
	</div>

	<div>
		<button id="quiz-previous-button">
			<span>PREVIOUS</span>
		</button>
		<button id="quiz-next-button">
			<span>NEXT</span>
		</button>
	</div>

</template>
