class Mark {

	correctIndex() {

			// Get a reference to the <ul> element with the .answer-list class
		const answerList = document.querySelector('.answer-list');

		// Get the value of the correct-index attribute
		const correctIndex = answerList.getAttribute('correct-index');

		return parseInt(correctIndex)

	}

	getSelectionIndex() {

			// Get a reference to the element with the .slms-answer-selected class
		const selectedAnswer = document.querySelector('.slms-answer-selected');

		// Get a reference to the parent <ul> element
		const answerList = selectedAnswer.parentNode;

		// Find the index of the selectedAnswer <li> within the <ul>
		const selectedIndex = Array.prototype.indexOf.call(answerList.children, selectedAnswer);

		return selectedIndex

	}

	check() {

		let result = false

		// Get the selected index from the answer list
		const selectedIndex = this.getSelectionIndex();

		// If a selection was made, check if it matches the correct index
		if (selectedIndex === -1) {
			console.error('No answer selected!')
		}

		if ( parseInt(selectedIndex) ===  this.correctIndex() ) {

			result = true

			// Mark correct.
			this.showCorrect(selectedIndex)

		} else {

			// Mark incorrect.
			this.showIncorrect(selectedIndex)

		}

		// Return result
		return result

	}

	showCorrect(selectedIndex) {

		// Color highlighting.
		const ul = document.querySelector('.answer-list');
		const selectedLi = ul.children[selectedIndex];
		ul.classList.remove('bg-emerald-100');
		ul.classList.add('bg-emerald-200');
		selectedLi.classList.add('bg-emerald-500');

		// Text report.
		const answerResultEl = document.getElementById('quiz-answer-result')
		answerResultEl.innerHTML = 'CORRECT'

	}

	showIncorrect(selectedIndex) {

		// Color highlighting.
		const ul = document.querySelector('.answer-list');
		const selectedLi = ul.children[selectedIndex];
		ul.classList.remove('bg-emerald-100');
		ul.classList.add('bg-red-200');
		selectedLi.classList.add('bg-red-500');

		// Text report.
		const answerResultEl = document.getElementById('quiz-answer-result')
		answerResultEl.innerHTML = 'INCORRECT'

	}

}
