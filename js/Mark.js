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

		const ul = document.querySelector('.answer-list');
		const selectedLi = ul.children[selectedIndex];
		selectedLi.classList.add('slms-answer-correct');

	}

	showIncorrect(selectedIndex) {

		const ul = document.querySelector('.answer-list');
		const selectedLi = ul.children[selectedIndex];
		selectedLi.classList.add('slms-answer-incorrect');

	}

}
