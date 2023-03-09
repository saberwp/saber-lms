var currentQuestionIndex = 0;

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

			this.answerScreenReset()

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

	answerScreenReset() {

		this.clearCanvas()
		this.answerScreenLoad()

	}

	answerScreenLoad() {

		const screenTemplate = document.getElementById('quiz-screen-answer-template');
		const quizCanvasEl = this.getCanvasEl();

		// Create a new element from the template content
		const screenContent = screenTemplate.content.cloneNode(true);

		// Append the new element to the container
		quizCanvasEl.appendChild(screenContent);

		// Setup question navigation buttons.
		this.quizNavigationButtonsInit();

	}

	quizNavigationButtonsInit() {

		// Next button.
		const quizNextButtonEl = document.getElementById('quiz-next-button');
		quizNextButtonEl.addEventListener('click', (e) => {
			this.answerScreenReset()
			const nextQuestionIndex = currentQuestionIndex +1
			this.questionLoad(nextQuestionIndex)
		})

		// Previous button.
		const quizPreviousButtonEl = document.getElementById('quiz-previous-button');
		quizPreviousButtonEl.addEventListener('click', (e) => {
			this.answerScreenReset()
			const nextQuestionIndex = currentQuestionIndex -1
			this.questionLoad(nextQuestionIndex)
		})

	}

	questionLoad( questionIndex ) {

		console.log('question load request for ' + questionIndex)

		// Save updated current question index.
		currentQuestionIndex = questionIndex

		// Get the question from the JSON question list output in PHP during quiz loading.
		const question = saberLmsQuestionList.questions[ questionIndex ]

		// Set the question text.
		const questionTextEl = document.getElementById('question-text')
		questionTextEl.innerHTML = question.text

		// Set the answer list.
		const questionAnswerListEl = document.getElementById('question-answer-list')
		questionAnswerListEl.innerHTML = ''
		question.answerList.forEach((answer) => {
			const answerEl = document.createElement('li')
			answerEl.innerHTML = answer.answer
			questionAnswerListEl.appendChild( answerEl )
		})

		// Init the answering script.
		const answer = new Answer()
		answer.init()

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
		const quizCanvasEl = document.getElementById('quiz-canvas')
		quizCanvasEl.removeChild( quizCanvasEl.firstElementChild )
		quizCanvasEl.innerHTML = ''
	}

}
