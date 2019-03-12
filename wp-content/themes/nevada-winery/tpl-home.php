<?php
/*
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>
<div class="banner" style="background-image: url( <?php echo get_field ('home_banner') ?>);">
<div class="banner-wrapper">
	<div class="banner__container page-container">
		<div class="banner__logo">
		<a href="<?php home_url(); ?>">
               <img alt="" src="<?php echo get_field('main-logo'); ?>">
            </a>
            </div>
		</div>
	</div>
</div>
</div>

	<main id="main" class="page-main page-container" role="main">

	<section class="ourStory">

	<?php
	$text = get_field("text");
	$our_story_title = get_field("our_story_title"); ?>
	<h1 class="main__title"> <?php
	echo $our_story_title 
	?></h1>
<p class="ourStory__text	">
	<?php
		echo $text;
	?>
</p>
	</section>

	<section class="image-block">
	<div class="gallery-wrapper">
<?php 
$images = get_field('our_wines_gallery');

if( $images ): ?>
    <ul class="gallery-container">
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>
	</section>

	<section class="subscribe">
	<div class="email-container">

<div class="container__outer">
	<!--Hover crashed-->
		<!-- <form class="form">
			<input type="email" placeholder="Enter your e-mail" class="form__input">
			<button type="button" class="button">
					subscribe <span class="button__arrow"><i class="fas fa-chevron-right"></i></span>
			</button>

		</form> -->
		<?php  echo do_shortcode('[contact-form-7 id="118" title="winery-email"]'); ?>

</div>
</div>
	</section>

	<section class="meetUs" style="background-image: url( <?php echo get_field ('meet_us_banner') ?>);">
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
