<?php
/**
 *  Template Name: Wines Page
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
          <?php

// check if the repeater field has rows of data
if( have_rows('wines_block') ):

 	// loop through the rows of data
    while ( have_rows('wines_block') ) : the_row(); ?>

        <div class="wine-block">

<div class="wine-bottle">

  <div class="wine-bottle__item">
    <!-- <img src="images/ourWines-1.png" alt="LAZY DAZE ROSE WINE, 2016" class="wine-bottle__img"> -->
    <img src="<?php the_sub_field('wines_bottle'); ?>" alt="LAZY DAZE ROSE WINE, 2016" class="wine-bottle__img">
  </div>


  <?php

// check if the repeater field has rows of data
if( have_rows('wines_icon_block') ):

 	// loop through the rows of data
    while ( have_rows('wines_icon_block') ) : the_row(); ?>
  <div class="wine-bottle__icon" style="background-image: url( <?php  the_sub_field('wines_icon'); ?>)" >
      <!-- <span class="wine-bottle__alc">0,75 l</span> -->
      <span class="wine-bottle__alc"><?php the_sub_field('wines_icon_text'); ?></span>
  </div>
  <?php endwhile;

else :

    // no rows found

endif;

?>

</div>

<div class="wine-info">
<div class="wine-content">
<?php the_sub_field('wines_info'); ?>




</div>
</div>

</div>
    <?php endwhile;

else :

    // no rows found

endif;

?>
    </div>
    </div>
</section>

<?php get_template_part('template-parts/content', 'contactUs'); ?>

</main>

<?php get_footer(); ?>