<?php

/*
 * Plugin Name: Saber LMS
 * Version: 1.0.1
 */

define( 'SABER_LMS_PATH', plugin_dir_path( __FILE__ ) );
define( 'SABER_LMS_URL', plugin_dir_url( __FILE__ ) );

class Plugin {

	public function __construct() {

		// Load post types.
		require_once(SABER_LMS_PATH.'/inc/post-types/course.php');
		require_once(SABER_LMS_PATH.'/inc/post-types/lesson.php');
		require_once(SABER_LMS_PATH.'/inc/post-types/question.php');
		require_once(SABER_LMS_PATH.'/inc/post-types/quiz.php');

		// Load classes.
		require_once(SABER_LMS_PATH.'/inc/QuestionList.php');
		require_once(SABER_LMS_PATH.'/inc/models/Question.php');

		// Load local field in PHP.
		require_once(SABER_LMS_PATH.'/fields/all.php');

		// Enqueue scripts.
		add_action('wp_enqueue_scripts', function() {
			//wp_enqueue_script( 'lms-course-list', SABER_LMS_URL . '/js/CourseList.js', array('backbone'), '1.0.0', true );
			wp_enqueue_script( 'lms-question-list', SABER_LMS_URL . '/js/QuestionList.js', array('backbone'), '1.0.0', true );
			wp_enqueue_script( 'lms-question', SABER_LMS_URL . '/js/Question.js', array('backbone'), '1.0.0', true );
			wp_enqueue_script( 'lms-answer', SABER_LMS_URL . '/js/Answer.js', array(), '1.0.0', true );
			wp_enqueue_script( 'lms-lock', SABER_LMS_URL . '/js/Lock.js', array(), '1.0.0', true );
			wp_enqueue_script( 'lms-mark', SABER_LMS_URL . '/js/Mark.js', array(), '1.0.0', true );
			wp_enqueue_script( 'lms-score', SABER_LMS_URL . '/js/Score.js', array(), '1.0.0', true );
			wp_enqueue_script( 'lms-quiz-screen', SABER_LMS_URL . '/js/QuizScreen.js', array(), '1.0.0', true );
		});

		// Template include.
		add_filter('template_include', [$this, 'template'] );



	}

	// Register the template for the 'course' post type
	function template($template) {

		// Course single.
		if (is_singular('course')) {
			$template = SABER_LMS_PATH . 'templates/single-course.php';
		}

		// Quiz single.
		if (is_singular('quiz')) {
			$template = SABER_LMS_PATH . 'templates/single-quiz.php';
		}

		// Question single.
		if (is_singular('question')) {
			$template = SABER_LMS_PATH . 'templates/single-question.php';
		}

		return $template;

	}

	public function activate() {

		// Flush permalinks on activation
  	flush_rewrite_rules();

	}

}

$plugin = new Plugin();

/* Activation hook. */
register_activation_hook( __FILE__, array( $plugin, 'activate' ) );
