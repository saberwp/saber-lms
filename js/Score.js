class Score {

	correctCount = 0;
	incorrectCount = 0;
	answerCount = 0;

	record( result ) {

		this.answer()

		if( result === true ) {
			this.correct()
			return
		}
		this.incorrect()
	}

	correct() {
		++this.correctCount
	}

	incorrect() {
		++this.incorrectCount
	}

	answer() {
		++this.answerCount
	}

}
