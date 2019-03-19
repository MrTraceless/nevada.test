<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="event-details">
       <div class="event-details-block1__item">
<?php 
// get raw date
$date = get_field('events_block_date', false, false);

// make date object
$date = new DateTime($date); ?>
        <span class="event-block1__item--desc"><?php echo $date->format('M j'); ?></span>
        <span class="event-block1__item--desc"><?php echo $date->format('Y'); ?></span>

        </div>

        <?php the_content(); ?>

    </div>
    <div class="button-wrapper">
    <button class="button-wrapper__calendar"><i class="far fa-calendar button-wrapper__calendar-icon"></i>calendar</button>
    <a href="<?php echo get_post_type_archive_link('events'); ?>" class="button button-wrapper__link"> Events To<span class="button__arrow"><i class="fas fa-chevron-right"></i></span></a>
    </div>
</article>

