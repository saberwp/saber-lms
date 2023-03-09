<?php get_header('app'); ?>

<div class="p-4 max-w-2xl mx-auto">
	<?php require_once( SABER_LMS_PATH . '/templates/parts/quiz-screen-start.php' ); ?>
</div>

<?php get_footer('app'); ?>

<script>

const answer = new Answer()
answer.init()

</script>
