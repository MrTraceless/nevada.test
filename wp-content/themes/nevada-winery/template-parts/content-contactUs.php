<section class="contactUs">


        <div class="contactUs-container">

            <div class="contactUs-container__outer">

<?php

// check if the repeater field has rows of data
if( have_rows('address_repeater', 'options') ):

 	// loop through the rows of data
    while ( have_rows('address_repeater', 'options') ) : the_row(); ?>
<div class="contactUs-block">
        <h2 class="contactUs-block__title"><?php the_sub_field('company_name', 'options'); ?></h2>
        <p class="contactUs-block__text"><?php the_sub_field('address_block', 'options'); ?></p>
</div>
    <?php endwhile;

else :

    // no rows found

endif;

?>

<?php
// check if the repeater field has rows of data
if( have_rows('contact_repeater', 'options') ):

 	// loop through the rows of data
    while ( have_rows('contact_repeater', 'options') ) : the_row(); ?>
<div class="contactUs-block">
        <h2 class="contactUs-block__title"><?php the_sub_field('contact_name', 'options'); ?></h2>
        <p class="contactUs-block__text"><?php the_sub_field('contact_link', 'options'); ?></p>
</div>
    <?php endwhile;

else :

    // no rows found

endif;

?>

<?php
// check if the repeater field has rows of data
if( have_rows('social_repeater', 'options') ):

 	// loop through the rows of data
    while ( have_rows('social_repeater', 'options') ) : the_row(); ?>
<div class="contactUs-block">
        <h2 class="contactUs-block__title"><?php the_sub_field('social_name', 'options'); ?></h2>
        
        <div class="contactUs-social">

<?php
// check if the repeater field has rows of data
if( have_rows('social_icons', 'options') ):

 	// loop through the rows of data
    while ( have_rows('social_icons', 'options') ) : the_row(); ?>
                <a href="<?php the_sub_field('social_icon_link', 'options'); ?>" class="contactUs-social__icon"><?php the_sub_field('social_icon', 'options'); ?></a>
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

