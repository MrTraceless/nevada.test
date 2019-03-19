<?php get_header(); ?>

<main class="page-main page-container" role="main">

    <section class="events">

			<?php the_title( '<h1 class="main__title events--main__title">', '</h1>' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>

				<div class="events-container">
                <div class="outer-container">
                <div class="event-column">

				<?php get_template_part( 'template-parts/content-events', 'details'); ?>

				<?php endwhile; ?>

</div>
</div>

        <!-- Calendar-->
		<div class="calendar-column">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

			<?php dynamic_sidebar( 'sidebar-1' ); ?>

			<?php endif; ?>
    </div>
</div>
    </section>
		<?php get_template_part('template-parts/content', 'contactUs'); ?>
</main>
<?php get_footer(); ?>