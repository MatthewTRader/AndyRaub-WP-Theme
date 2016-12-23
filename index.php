<?php get_header(); ?>

	<main role="main">
        <div class="container">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', '' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
        </div>
	</main>

<?php get_footer(); ?>
