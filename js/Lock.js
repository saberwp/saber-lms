class Lock {

	apply() {

		console.log('applying lock...')

		this.removeSelectionEvent()

		const answerList = document.querySelector('.answer-list');
		if (answerList) {
			answerList.classList.add('slms-question-locked');
		}

		// Disable button.
		const button = document.getElementsByClassName("slms-answer-question")[0];
		button.disabled = true;

	}

	removeSelectionEvent() {

		const answer = new Answer()

		// Get a reference to the .answer-list element
		const answerList = document.querySelector('.answer-list');

		// Get an array of all the <li> elements inside .answer-list
		const answerItems = answerList.querySelectorAll('li');

		answerItems.forEach(function(item) {
			item.removeEventListener('click', answer.select)
		});
	}

}
