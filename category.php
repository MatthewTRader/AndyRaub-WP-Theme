<?php get_header(); ?>

	<main role="main" class="archives">
        <div class="container">
		<!-- section -->
		<section>

			<h1><?php _e( 'Categories for ', '' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
        </div>
        <div class="clear"></div>
	</main>

<?php get_footer(); ?>
