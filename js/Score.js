class Score {

	questionCount = 0;
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

	// Returns percentage unformatted and unrounded.
	getScorePercentage() {
		return ( this.correctCount / this.answerCount ) * 100
	}

	// Returns score percentage with formatting, example "87.2%".
	getScorePercentageFormatted() {
		if( this.answerCount === 0 ) {
			return '0%'
		}
		const percentRounded = this.getScorePercentage().toFixed(1)
		return percentRounded + '%'
	}

	// Checks against 80%, returns PASS or FAIL as a string.
	getPassFailResult() {
		if( this.getScorePercentage() >= 80 ) {
			return 'PASS'
		}
		return 'FAIL'
	}

	getUnansweredCount() {
		return this.questionCount - this.answerCount
	}

}
