<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="event">
        <div class="event-block1">
            <div class="event-block1__item">

<?php

$date = get_field('events_block_date', false, false);

$date = new DateTime($date);?>

        <span class="event-block1__item--desc"><?php echo $date->format('M j'); ?></span>
        <span class="event-block1__item--desc"><?php echo $date->format('Y'); ?></span>

            </div>
    
        </div>

        <div class="event-block2">
			<?php the_title( '<h3 class="h3-title event-block2__title">', '</h3>' ); ?>
            <p class="paragraph event-block2__text"><?php echo get_the_excerpt(); ?></p>
            <div class="button-wrapper">
            <button class="button-wrapper__calendar"><i class="far fa-calendar button-wrapper__calendar-icon"></i>calendar</button>
            <a href="<?php echo get_the_permalink(); ?>" class="button button-wrapper__link">Read me<span class="button__arrow"><i class="fas fa-chevron-right"></i></span></a>
            </div>
        </div>

</article>
