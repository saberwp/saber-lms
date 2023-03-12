<?php get_header('app'); ?>
<div class="w-full my-6 p-2 md:p-0 md:max-w-5xl md:mx-auto">
	<div class="md:flex md:gap-12">

		<!-- Left Side -->
		<div class="md:basis-7/12 md:shrink-0 md:grow-0">

			<!-- Title and description. -->
			<h1 class="text-3xl font-bold my-2">
				<?php the_title(); ?>
			</h1>
			<div class="font-medium text-lg">
				<?php the_content(); ?>
			</div>

			<!-- Course registration. -->
			<div class="my-6">
				<h2 class="text-2xl font-semibold">Course Registration</h2>
				<p>This course is free and self-timed. You do need to register in order to gain access to course materials and related assets.</p>
				<a href="" class="block rounded-lg my-2 bg-gray-800 text-white px-4 py-2 font-semibold text-center hover:bg-gray-900">Register Now</a>
			</div>

		</div>

		<!-- Course Info Side -->
		<div class="basis-5/12 grow-0 shrink-0 bg-gray-800 text-white p-4 flex flex-col gap-4 rounded">

			<div class="">
				<h2 class="text-2xl font-semibold">Lesson Count</h2>
				<div>This course contains 24 lessons.</div>
			</div>

			<div class="">
				<h2 class="text-2xl font-semibold">Course Prerequisites</h2>
				<div>This course doesn't have any fixes prerequisites. Anyone with basic computing skills and some familiarity with web development should be able to follow the course materials. A background in CSS and HTML will be helpful. Some experience with PHP would also be beneficial.</div>
			</div>

		</div>

	</div><!-- Closes flex wrap. -->
</div>
<?php get_footer('app'); ?>
