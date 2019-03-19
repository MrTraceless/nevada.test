<?php get_header(); ?>
<?php get_template_part('template-parts/content', 'banner'); ?>

<main id="main" class="page-main page-container" role="main">

	<section class="events">
	<?php $events_title = get_field('events_title', 'option'); ?>
	<h1 class="main__title events--main__title"> <?php
	echo $events_title;
	?></h1>

	<div class="events-container">

        <div class="outer-container">

            <div class="event-column">

	<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/content', 'events'); ?>

<?php endwhile; ?>


<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

			</div>

		</div>

	<div class="calendar-column">
	<div class="calendar-container">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
  				dynamic_sidebar( 'sidebar-1' );
				} ?>
		</div>

    	</div>
    </div>

	<?php get_template_part('template-parts/content', 'contactUs'); ?>

	</section>

</main>

<?php get_footer(); ?>
