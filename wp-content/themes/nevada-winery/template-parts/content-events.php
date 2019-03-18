<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="event">
<div class="event-block1">
    <div class="event-block1__item">
        <span class="event-block1__item--desc"><?php echo get_the_date('M j'); ?></span>
        <span class="event-block1__item--desc"><?php echo get_the_date('Y'); ?></span>
	</div>
</div>
<div class="event-block2">
			<?php the_title( '<h3 class="h3-title event-block2__title">', '</h3>' ); ?>
            <p class="paragraph event-block2__text"><?php echo get_the_excerpt(); ?></p>
            <button class="event-block2__calendar"><i class="far fa-calendar event-block2__calendar-icon"></i>calendar</button>
        <a href="<?php echo get_the_permalink(); ?>" class="button event-block2__link"> Read me<span class="button__arrow"><i class="fas fa-chevron-right"></i></span></a>
    </div>
</div>
		<?php the_content(); ?>
	

</article>
