<?php

namespace SaberLms;

class QuestionList {

	public $hasQuestions = false;
	public $questionIds = array(); // Question ID's only in numeric indexed array directly from the question_list field.
	public $questions = array(); // Fully populated question in numeric indexed array.

	public function loadByQuiz( $quizId ) {

		// Load question list from question_list field.
		// Return expected is array of question ID's.
		$questionListValues = get_field('question_list', $quizId);
		if( is_array( $questionListValues ) && ! empty( $questionListValues ) ) {
			$this->hasQuestions = true;
		} else {
			// Stop processing because there are no questions.
			return;
		}
		$this->questionIds = $questionListValues;

		// Load each question.
		foreach( $this->questionIds as $questionId ) {
			$this->questions[] = $this->loadQuestion( $questionId );
		}

		// Render as JSON var.
		$this->renderJson();

	}

	public function loadQuestion( $questionId ) {

		$questionPost = get_post( $questionId );
		$answerListValues = get_field( 'answer_list', $questionPost->ID );

		// Set question model.
		$question = new Question();
		$question->id = $questionId;
		$question->answerList = $answerListValues;

		return $question;

	}

	public function renderJson() {

		echo '<script>';
		echo 'var saberLmsQuestionList = ';
		echo json_encode( $this );
		echo '</script>';

	}

}
