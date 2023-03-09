class Answer {

	init() {
		this.selectionEvent()
		this.answerEvent()
	}

	clearSelection() {

			// Get an array of all the elements with the .slms-answer-selected class
		const selectedAnswers = document.querySelectorAll('.slms-answer-selected');

		// Loop through the selectedAnswers array and remove the class from each element
		selectedAnswers.forEach(function(item) {
		  item.classList.remove('slms-answer-selected');
			item.classList.remove('bg-blue-600')
			item.classList.add('hover:bg-green-800')
			item.classList.add('hover:text-white')
		});

	}

	selectionEvent() {

		// Get a reference to the .answer-list element
		const answerList = document.querySelector('.answer-list');

		// Get an array of all the <li> elements inside .answer-list
		const answerItems = answerList.querySelectorAll('li');

		// Loop through the answerItems array and add a click event to each <li>
		answerItems.forEach(function(item) {

			const answer = new Answer()
			item.addEventListener('click', answer.select);

		});

	}

	select(e) {

		const answer = new Answer()

		// Clear selection.
		answer.clearSelection();

		// Select user choice.
		e.currentTarget.classList.add('slms-answer-selected')
		e.currentTarget.classList.add('bg-blue-600')
		e.currentTarget.classList.remove('hover:bg-green-800')
		e.currentTarget.classList.remove('hover:text-white')

	}

	answerEvent() {

		// Get a reference to the button.slms-answer-question element
		const answerButton = document.getElementById('quiz-answer-button');

		// Set up a click event handler for the questionButton element
		answerButton.addEventListener('click', () => {

			// Lock the question to prevent multiple answering.
			const lock = new Lock()
			lock.apply()

			// Mark the answer.
			const mark = new Mark()
			const result = mark.check()

			// Record score.
			score.record( result )

		});

	}

}
