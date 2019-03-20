<?php
/*
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>
<?php get_template_part('template-parts/content', 'banner'); ?>

	<main id="main" class="page-main page-container" role="main">

	<section class="ourStory">

	<?php
	$text = get_field("text");
	$our_story_title = get_field("our_story_title"); ?>
	<h1 class="main__title"> <?php
	echo $our_story_title 
	?></h1>
<p class="ourStory__text">
	<?php
		echo $text;
	?>
</p>
	</section>

	<section class="image-block">
	<?php

// check if the repeater field has rows of data
if( have_rows('our_wines_photo_block') ):

 	// loop through the rows of data
	while ( have_rows('our_wines_photo_block') ) : the_row(); ?>
	
		<div class="image-block__img">
        	<img src="<?php the_sub_field('our_wines_photo_item'); ?>">
		</div>
    <?php endwhile;

else :

    // no rows found

endif; ?>
	</section>

	<section class="subscribe">
	<div class="email-container">

<div class="container__outer">
	
		<div class='subscribe-form'>
		<?php  echo do_shortcode('[contact-form-7 id="118" title="winery-email"]'); ?>
		</div>

</div>
</div>
	</section>

	<section class="meetUs" style="background-image: url( <?php echo get_field ('meet_us_banner'); ?>)">
	<?php
	$meet_us_title = get_field("meet_us_title");
	$meet_us_text = get_field("meet_us_text"); ?>

	<div class="meetUs-container">

	<div class="meetUs-block">
	<h2  class="meetUs-block__title"> <?php
	echo $meet_us_title ?></h2>

	<p class="meetUs-block__text">
	<?php
		echo $meet_us_text;
	?>
</p>

</div>

</div>
</section>
<?php get_template_part('template-parts/content', 'contactUs'); ?>
	</main>

<?php get_footer(); ?>
