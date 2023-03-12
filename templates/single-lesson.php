<?php

$currentLessonId = $post->ID;
$courseId = get_field('course');
$lessonList = get_field('lesson_list', $courseId);
$lessonCount = count($lessonList);

// Discover and set the lesson index and number.
$currentLessonIndex = 0;
$currentLessonNumber = 1;
if( ! empty( $lessonList ) ) {
	foreach( $lessonList as $lessonIndex => $lessonId ) {
		if( $currentLessonId === $lessonId ) {
			$currentLessonNumber = $lessonIndex +1;
		}
	}
}

?>

<?php get_header('app'); ?>
<div class="w-full my-6 p-2 md:p-0 md:max-w-5xl md:mx-auto">

	<div class="flex gap-12">

		<div class="basis-8/12">
			<!-- Title and description. -->
			<h1 class="text-gray-800 text-3xl font-bold my-1">
				<?php the_title(); ?>
			</h1>
			<h2 class="text-gray-400 font-semibold text-2xl">
				Lesson <?php echo $currentLessonNumber; ?> of <?php echo $lessonCount; ?>
			</h2>
			<div class="mt-8 font-medium text-lg">
				<?php the_content(); ?>
			</div>

			<!-- Mark lesson complete. -->
			<div class="bg-gray-200 rounded p-4 mt-4">
				<h2 class="text-gray-800 text-xl font-semibold">
					Mark Lesson Complete
				</h2>
				<p>
					Marking this lesson complete will update your overall course progress. You will still be able to visit and read the lesson again.
				</p>
				<a href="" class="block w-48 mt-2 bg-gray-800 text-white rounded-md px-4 py-2 text-center hover:bg-gray-900" id="lesson-mark-complete">Mark Complete</a>
			</div>

		</div>

		<!-- Side panel. -->
		<div class="basis-4/12 flex flex-col gap-4 shrink-0 bg-gray-800 rounded p-4 text-white">

			<!-- Lesson list. -->
			<section>
				<h2 class="text-lg text-gray-400 font-semibold my-2">
					LESSON LIST
				</h2>
				<ul class="text-base">
					<?php
						$lesson_list = get_field('lesson_list', 520);
						if( ! empty( $lesson_list ) ) {
							foreach( $lesson_list as $lessonId ) {
								$lesson = get_post( $lessonId );
								$classes = '';
								if( $lessonId == $post->ID ) {
									$classes .= 'text-white font-semibold';
								} else {
									$classes .= 'text-gray-400';
								}
					?>
						<li class="<?php echo $classes; ?>">
							<?php echo $lesson->post_title; ?>
						</li>
					<?php
							}
						}
					?>
				</ul>
			</section>

			<section>
				<h2 class="text-lg text-gray-400 font-semibold my-2">
					COURSE DASHBOARD
				</h2>
				<a href="<?php echo get_permalink( $courseId ); ?>" class="block bg-gray-900 rounded-md px-4 py-2 font-semibold text-sm hover:bg-gray-800">
					Visit Course Dashboard
				</a>
			</section>

		</div>

	</div><!-- End flex container. -->

</div>
<?php get_footer('app'); ?>
