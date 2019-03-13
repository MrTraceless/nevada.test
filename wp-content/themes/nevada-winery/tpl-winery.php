<?php
/**
 *  Template Name: Winery Page
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content', 'banner'); ?>

<main id="main" class="page-main page-container" role="main">

<section class="our-wines">
    <?php
	$winery_title = get_field("winery_title"); ?>
	<h1 class="main__title"> <?php
	echo $winery_title
	?></h1>
          <div class="our-wines-container">

        <div class="our-wines-container-inner">
    </div>
    </div>
</section>

<?php get_template_part('template-parts/content', 'contactUs'); ?>

</main>

<?php get_footer(); ?>