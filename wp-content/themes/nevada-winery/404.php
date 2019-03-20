<?php get_header(); ?>
<?php get_template_part('template-parts/content', 'banner'); ?>

	<main id="main" class="page-main" role="main">

		<section class="error-404 not-found">

			<div>
				<h1 class="main__title no-found-page"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.'); ?></h1>
			</div>

		</section>

	</main>

<?php get_footer(); ?>
