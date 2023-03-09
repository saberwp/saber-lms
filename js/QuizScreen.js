class QuizScreen {

	init() {

		// Show start.
		this.startScreenLoad()

		// Start button.
		this.startButtonInit()

	}

	startButtonInit() {

		const startButtonEl = document.getElementById('quiz-start-button')
		startButtonEl.addEventListener('click', (e) => {

			this.clearCanvas()
			this.answerScreenLoad()

		})

	}

	restartButtonInit() {

		const buttonEl = document.getElementById('quiz-restart-button')
		buttonEl.addEventListener('click', (e) => {
			this.clearCanvas()
			this.startScreenLoad()
			this.startButtonInit()
		})

	}

	startScreenLoad() {

		const startScreenTemplate = document.getElementById('quiz-screen-start-template');
		const quizCanvasEl = document.getElementById('quiz-canvas');

		// Create a new element from the template content
		const startScreenContent = startScreenTemplate.content.cloneNode(true);

		// Append the new element to the container
		quizCanvasEl.appendChild(startScreenContent);

	}

	answerScreenLoad() {

		const screenTemplate = document.getElementById('quiz-screen-answer-template');
		const quizCanvasEl = this.getCanvasEl();

		// Create a new element from the template content
		const screenContent = screenTemplate.content.cloneNode(true);

		// Append the new element to the container
		quizCanvasEl.appendChild(screenContent);

	}

	reviewScreenLoad() {

		const screenTemplate = document.getElementById('quiz-screen-review-template');
		const quizCanvasEl = this.getCanvasEl();

		// Create a new element from the template content
		const screenContent = screenTemplate.content.cloneNode(true);

		// Append the new element to the container
		quizCanvasEl.appendChild(screenContent);

	}

	getCanvasEl() {
		return document.getElementById('quiz-canvas');
	}

	clearCanvas() {

		const quizCanvasEl = document.getElementById('quiz-canvas');
		quizCanvasEl.innerHTML = ''

	}

}
