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

	</main>

<?php get_footer(); ?>
