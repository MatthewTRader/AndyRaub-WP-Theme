<?php get_header(); ?>

	<main role="main" class="archives">
		<!-- section -->
		<section>

			<h1><?php _e( 'Tag Archive: ', '' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
