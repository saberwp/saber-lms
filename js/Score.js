class Score {

	correctCount = 0;
	incorrectCount = 0;

	record( result ) {
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

}
