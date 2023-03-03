<?php get_header('app'); ?>

<div class="p-4 max-w-2xl mx-auto">
	<h1 class="font-semibold text-2xl"><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<div class="bg-green-200 h-40 p-8">
		<?php

			$answers = get_field('answer_list');

			if( ! empty( $answers )) {
				echo '<ul>';
				foreach( $answers as $answer ) {
					echo '<li class="cursor-pointer font-medium text-lg hover:bg-green-800 hover:text-white">';
					echo $answer['answer'];
					echo '</li>';
				}
				echo '</ul>';
			}

		?>
		<button class="font-semibold text-white bg-gray-800 rounded-md px-4 py-2">ANSWER</button>
	</div>
</div>

<?php get_footer('app'); ?>
