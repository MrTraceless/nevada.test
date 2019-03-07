<?php
/*
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">
	<section>

	<?php
	$text = get_field("text");
	$our_story_title = get_field("our_story_title"); ?>
	<h2> <?php 
	echo $our_story_title 
	?></h2>
<p>
	<?php
		echo $text;
	?>
</p>

	</section>

	</main>

<?php get_footer(); ?>
