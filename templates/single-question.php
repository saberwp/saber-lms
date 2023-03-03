<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<div class="bg-green-200 h-40 p-8">
	<?php

		$answers = get_field('answer_list');
		var_dump( $answers );

	?>
</div>
<?php get_footer(); ?>
