<?php

/*
 * Plugin Name: Saber LMS
 */

define( 'SABER_LMS_PATH', plugin_dir_path( __FILE__ ) );
define( 'SABER_LMS_URL', plugin_dir_url( __FILE__ ) );

class Plugin {


	public function __construct() {

		// Load post types.
		require_once(SABER_LMS_PATH.'/inc/post-types/course.php');
		require_once(SABER_LMS_PATH.'/inc/post-types/lesson.php');
		require_once(SABER_LMS_PATH.'/inc/post-types/question.php');

		// Enqueue scripts.
		add_action('wp_enqueue_scripts', function() {
			//wp_enqueue_script( 'lms-course-list', SABER_LMS_URL . '/js/CourseList.js', array('backbone'), '1.0.0', true );
			wp_enqueue_script( 'lms-question-list', SABER_LMS_URL . '/js/QuestionList.js', array('backbone'), '1.0.0', true );
			wp_enqueue_script( 'lms-question', SABER_LMS_URL . '/js/Question.js', array('backbone'), '1.0.0', true );
		});

	}

	public function activate() {

		// Flush permalinks on activation
  	flush_rewrite_rules();

	}

}

$plugin = new Plugin();


register_activation_hook( __FILE__, array( $plugin, 'activate' ) );


// Register the template for the 'course' post type
function saber_lms_course_template($template) {
  if (is_singular('course')) {
    $template = SABER_LMS_PATH . 'templates/single-course.php';
  }
  return $template;
}
add_filter('template_include', 'saber_lms_course_template');