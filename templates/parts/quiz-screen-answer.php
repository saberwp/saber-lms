<template id="quiz-screen-answer-template">

	<div class="p-4 max-w-2xl mx-auto">
		<h1 class="font-semibold text-2xl">{{question.text}}</h1>
		<div class="bg-green-200 h-40 p-8">
			<ul class="answer-list">{{question.answer_list}}</ul>
			<button class="slms-answer-question font-semibold text-white bg-gray-800 rounded-md px-4 py-2">ANSWER</button>
		</div>
	</div>

</template>
