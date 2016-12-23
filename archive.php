<?php get_header(); ?>

	<main role="main">
        <div class="container">
		<!-- section -->
		<section>

			<h1><?php _e( 'Archives', '' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
        </div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
