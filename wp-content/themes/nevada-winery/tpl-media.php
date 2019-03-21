<?php
/*
 * Template Name: Media Page
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content', 'banner'); ?>

<main id="main" class="page-main page-container" role="main">

<section>
<?php
	$media_title = get_field("media_title"); ?>
	<h1 class="main__title"><?php
	echo $media_title
	?></h1>

    <!-- HTML CODE -->
            <!-- End HTML -->
    <div class="publications">
    <?php

// check if the repeater field has rows of data
if( have_rows('media_repeater') ):

 	// loop through the rows of data
    while ( have_rows('media_repeater') ) : the_row(); ?>

            <div class="publications-column">
			<div class="publications-container">
                <div class="publications-text-block">
        <p class="publications-text-block__date"><?php the_sub_field('media_post_date'); ?></p>
        <h2 class="h2-title publications-text-block__title"> <?php the_sub_field('media_post_title'); ?></h2>
        <?php

            $image = get_sub_field('media_post_image');


            if ($image) :?>
                <img src="<?php echo $image; ?>" alt="" class="publications__img">
            <?php endif;
        ?>
        
		<p class="publications-text-block__text"> <?php the_sub_field('media_post_text'); ?></p>
        </div>
        <!-- Link Repeater -->

<?php

if( have_rows('media_post_link_block') ):


    while ( have_rows('media_post_link_block') ) : the_row(); ?>
        <a href="<?php the_sub_field('media_post_link'); ?>" class="button publications-container__btn">
			<?php  the_sub_field('media_post_link_text'); ?><span class="button__arrow"><i class="fas fa-chevron-right"></i></span>
		</a>
        </div>
        </div>
    <?php endwhile;

else :

    // no rows found

endif;

?>

    <?php endwhile;

else :

    // no rows found

endif;
?>
</div>
</section>

<?php get_template_part('template-parts/content', 'contactUs'); ?>

</main>

<?php get_footer(); ?>