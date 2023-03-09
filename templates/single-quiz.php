<?php get_header('app'); ?>

	<!-- Quiz canvas, dynamically populated by JS using DOM injection of <template> tags. -->
	<div id="quiz-canvas" class="bg-gray-100 my-6 rounded-md p-4 max-w-2xl mx-auto"></div>

<?php

/*
	Load the template parts.
		- Each template is wrapped in a <template> tag.
		- Templates are injected into the DOM when required by the QuizScreen JS class.
*/
require_once( SABER_LMS_PATH . '/templates/parts/quiz-screen-start.php' );
require_once( SABER_LMS_PATH . '/templates/parts/quiz-screen-answer.php' );
require_once( SABER_LMS_PATH . '/templates/parts/quiz-screen-review.php' );

?>

<?php

/*
 * Load question list.
 */
$question_list = new \SaberLms\QuestionList;
$question_list->loadByQuiz( $post->ID );

/*
echo '<pre>';
var_dump( $question_list );
echo '</pre>';
*/

?>

<?php get_footer('app'); ?>

<script>

const quizScreen = new QuizScreen()
quizScreen.init()

</script>
