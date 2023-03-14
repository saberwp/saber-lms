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

$nextLessonIndex = $currentLessonIndex +1;
$nextLessonId = $lessonList[ $nextLessonIndex ];

?>

<?php get_header('app'); ?>
<div class="w-full my-6 p-2 md:max-w-5xl md:mx-auto">

	<div class="flex gap-12">

		<div class="basis-8/12">
			<!-- Title and description. -->
			<h1 class="text-gray-800 text-3xl font-bold my-1">
				<?php the_title(); ?>
			</h1>
			<h2 class="text-gray-400 font-semibold text-2xl">
				Lesson <?php echo $currentLessonNumber; ?> of <?php echo $lessonCount; ?>
			</h2>
			<div class="mt-8 font-medium text-lg prose">
				<?php the_content(); ?>
			</div>

			<!-- Mark lesson complete. -->
			<div class="bg-gray-700 rounded p-8 mt-4">
				<h2 class="text-gray-400 text-lg font-semibold">
					Mark Lesson Complete
				</h2>
				<p class="text-gray-400">
					Marking this lesson complete will update your overall course progress. You will still be able to visit and read the lesson again.
				</p>
				<div class="flex justify-center mt-6">
					<button class="bg-gray-800 text-gray-400 rounded-md px-4 py-2 text-center hover:bg-gray-900" id="lesson-mark-complete">
						<span class="block font-semibold">Mark Complete</span>
					</button>
				</div>
			</div>

			<!-- Next lesson link. -->
			<section class="flex gap-4 justify-center mt-8">
				<div>
					<svg width="75" height="60" viewBox="0 0 75 60" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M69.2522 5.625H24.3319V12.3398C22.6006 11.6367 20.7055 11.25 18.7168 11.25V5.625V0H24.3319H69.2522H74.8673V5.625V43.125V48.75H69.2522H63.6372H60.8296H45.8562H43.0487H37.9717L36.2872 43.125H43.0487V34.6875V31.875H45.8562H60.8296H63.6372V34.6875V43.125H69.2522V5.625ZM58.0221 43.125V37.5H48.6637V43.125H58.0221ZM24.3319 26.25C24.3319 24.7582 23.7403 23.3274 22.6873 22.2725C21.6342 21.2176 20.206 20.625 18.7168 20.625C17.2276 20.625 15.7994 21.2176 14.7464 22.2725C13.6934 23.3274 13.1018 24.7582 13.1018 26.25C13.1018 27.7418 13.6934 29.1726 14.7464 30.2275C15.7994 31.2824 17.2276 31.875 18.7168 31.875C20.206 31.875 21.6342 31.2824 22.6873 30.2275C23.7403 29.1726 24.3319 27.7418 24.3319 26.25ZM7.48673 26.25C7.48673 23.2663 8.66989 20.4048 10.7759 18.295C12.882 16.1853 15.7384 15 18.7168 15C21.6952 15 24.5516 16.1853 26.6577 18.295C28.7637 20.4048 29.9469 23.2663 29.9469 26.25C29.9469 29.2337 28.7637 32.0952 26.6577 34.205C24.5516 36.3147 21.6952 37.5 18.7168 37.5C15.7384 37.5 12.882 36.3147 10.7759 34.205C8.66989 32.0952 7.48673 29.2337 7.48673 26.25ZM7.54522 54.375H29.8884L27.6424 46.875H9.79123L7.54522 54.375ZM5.61504 41.25H31.8186L35.7491 54.375L37.4336 60H31.5729H5.8607H0L1.68451 54.375L5.61504 41.25Z" fill="#1F2937"/>
					</svg>
				</div>
				<a href="<?php echo get_permalink( $nextLessonId ); ?>" class="block bg-gray-800 text-white rounded h-16 flex content-between items-center px-6 gap-6 hover:bg-gray-900">
					<span class="text-gray-400">NEXT LESSON</span>
					<svg width="35" height="40" viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M34.5455 20L0 0V40L34.5455 20Z" fill="#565F6C"/>
					</svg>
				</a>
			</section>

		</div>

		<!-- Side panel. -->
		<div class="basis-4/12 flex flex-col gap-4 shrink-0 bg-gray-800 rounded px-6 py-4 text-white bg-gradient-to-r from-gray-900">

			<!-- Lesson list. -->
			<section class="border-b-2 border-gray-700 pb-6">
				<h2 class="text-base text-gray-400 font-semibold my-2">
					LESSON LIST
				</h2>
				<ul class="text-base">
					<?php
						$lesson_list = get_field('lesson_list', $courseId);
						if( ! empty( $lesson_list ) ) {
							foreach( $lesson_list as $lessonId ) {
								$lesson = get_post( $lessonId );
								$classes = '';
								if( $lessonId == $post->ID ) {
									$classes .= 'text-gray-600 font-medium';
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
				<h2 class="text-base text-gray-400 font-semibold my-2">
					COURSE DASHBOARD
				</h2>
				<a href="<?php echo get_permalink( $courseId ); ?>" class="block bg-gray-900 rounded-md px-4 py-2 font-semibold text-sm text-gray-600 hover:bg-gray-800">
					Visit Course Dashboard
				</a>
			</section>

		</div>

	</div><!-- End flex container. -->

</div>
<?php get_footer('app'); ?>
