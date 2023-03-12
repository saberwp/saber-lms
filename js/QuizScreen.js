// Setup global vars.
var currentQuestionIndex = 0;
var score = new Score();


class QuizScreen {

	init() {

		// Set question count.
		score.questionCount = saberLmsQuestionList.questions.length

		// Show start.
		this.startScreenLoad()

		// Start button.
		this.startButtonInit()

	}

	startButtonInit() {

		const startButtonEl = document.getElementById('quiz-start-button')
		startButtonEl.addEventListener('click', (e) => {
			this.answerScreenReset()
			this.questionLoad(0)
		})

	}

	restartButtonInit() {

		const buttonEl = document.getElementById('quiz-restart-button')
		buttonEl.addEventListener('click', (e) => {

			// Reset the global score var.
			score = new Score()

			// Set question count.
			score.questionCount = saberLmsQuestionList.questions.length

			this.clearCanvas()
			this.startScreenLoad()
			this.startButtonInit()
		})

	}

	continueButtonInit() {

		const buttonEl = document.getElementById('quiz-continue-button')
		buttonEl.addEventListener('click', (e) => {

			this.clearCanvas()
			this.answerScreenLoad()

			// The question loaded is the currentQuestionIndex which should remain unchanged since before the student visited the review page.
			this.questionLoad( currentQuestionIndex )

		})

	}

	exitButtonInit() {

		const buttonEl = document.getElementById('quiz-exit-button')
		buttonEl.addEventListener('click', (e) => {

			window.location.href = '/dashboard'

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


			if( currentQuestionIndex === saberLmsQuestionList.questions.length -1 ) {
				return // there is no next.
			}

			this.answerScreenReset()
			const nextQuestionIndex = currentQuestionIndex +1
			this.questionLoad(nextQuestionIndex)
		})

		// Previous button.
		const quizPreviousButtonEl = document.getElementById('quiz-previous-button');
		quizPreviousButtonEl.addEventListener('click', (e) => {

			if( currentQuestionIndex === 0 ) {
				return // there is no previous.
			}

			this.answerScreenReset()
			const nextQuestionIndex = currentQuestionIndex -1
			this.questionLoad(nextQuestionIndex)
		})

		// Review button.
		const quizReviewButtonEl = document.getElementById('quiz-review-button');
		quizReviewButtonEl.addEventListener('click', (e) => {
			this.clearCanvas()
			this.reviewScreenLoad()
			this.restartButtonInit()
			this.continueButtonInit()
			this.exitButtonInit()
		})

	}

	questionLoad( questionIndex ) {

		// Save updated current question index.
		currentQuestionIndex = questionIndex

		// Get the question from the JSON question list output in PHP during quiz loading.
		const question = saberLmsQuestionList.questions[ questionIndex ]

		// Set the question text.
		const questionTextEl = document.getElementById('question-text')
		questionTextEl.innerHTML = question.text

		// Set the answer list.
		const questionAnswerListEl = document.getElementById('question-answer-list')

		// Render the answer list.
		questionAnswerListEl.innerHTML = ''
		const listItemClassList = ['cursor-pointer', 'px-2', 'py-1', 'my-1', 'rounded-md', 'font-medium', 'text-lg', 'hover:bg-green-800', 'hover:text-white']
		question.answerList.forEach((answer, answerIndex) => {
			const answerEl = document.createElement('li')

			// Add classes to list item.
			answerEl.classList.add(...listItemClassList);

			answerEl.innerHTML = answer.answer
			questionAnswerListEl.appendChild( answerEl )

			// Set correct answer index.
			if( answer.correct === true ) {
				questionAnswerListEl.setAttribute('correct-index', answerIndex)
			}

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

		// Set question count.
		const questionCountEl = document.getElementById('quiz-question-count')
		questionCountEl.innerHTML = score.questionCount

		// Set reporting data.
		const correctReportEl = document.getElementById('quiz-report-correct')
		correctReportEl.innerHTML = score.correctCount
		const answerCountReportEl = document.getElementById('quiz-report-answer-count')
		answerCountReportEl.innerHTML = score.answerCount
		const scorePercentageEl = document.getElementById('quiz-report-score-percentage')
		scorePercentageEl.innerHTML = score.getScorePercentageFormatted()
		const passFailEl = document.getElementById('quiz-report-pass-fail')
		passFailEl.innerHTML = score.getPassFailResult()
		const answerCountReportEl2 = document.getElementById('quiz-report-answer-count-2')
		answerCountReportEl2.innerHTML = score.answerCount
		const unansweredCountEl = document.getElementById('quiz-report-unanswered-count')
		unansweredCountEl.innerHTML = score.getUnansweredCount()
		const incorrectCountEl = document.getElementById('quiz-report-incorrect-count')
		incorrectCountEl.innerHTML = score.incorrectCount

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
