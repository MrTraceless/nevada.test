<section class="contactUs">


        <div class="contactUs-container">

            <div class="contactUs-container__outer">

<?php

// check if the repeater field has rows of data
if( have_rows('main_repeater') ):

 	// loop through the rows of data
    while ( have_rows('first_repeater') ) : the_row(); ?>
<div class="contactUs-block">
        <h2 class="contactUs-block__title"><?php the_sub_field('titleok'); ?></h2>
        <p class="contactUs-block__text"><?php the_sub_field('textok'); ?></p>
</div>
    <?php endwhile;

else :

    // no rows found

endif;

?>

<?php
// check if the repeater field has rows of data
if( have_rows('second_repeater') ):

 	// loop through the rows of data
    while ( have_rows('second_repeater') ) : the_row(); ?>
<div class="contactUs-block">
        <h2 class="contactUs-block__title"><?php the_sub_field('titleok2'); ?></h2>
        <p class="contactUs-block__text"><?php the_sub_field('textok2'); ?></p>
</div>
    <?php endwhile;

else :

    // no rows found

endif;

?>

<?php
// check if the repeater field has rows of data
if( have_rows('third_repeater') ):

 	// loop through the rows of data
    while ( have_rows('third_repeater') ) : the_row(); ?>
<div class="contactUs-block">
        <h2 class="contactUs-block__title"><?php the_sub_field('titleok3'); ?></h2>
        
        <div class="contactUs-social">

<?php
// check if the repeater field has rows of data
if( have_rows('social_icons') ):

 	// loop through the rows of data
    while ( have_rows('social_icons') ) : the_row(); ?>
                <a href="<?php the_sub_field('social_icon_link'); ?>" class="contactUs-social__icon"><?php the_sub_field('social_icon'); ?></a>
    <?php endwhile;

else :

    // no rows found

endif;

?>
</div>
</div>
    <?php endwhile;

else :

    // no rows found

endif;

?>

    </section>

