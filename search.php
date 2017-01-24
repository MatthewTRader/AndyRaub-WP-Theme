<?php get_header(); ?>

	<main role="main" class="archives">
        <div class="container">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', '' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
        </div>
        <div class="clear"></div>
	</main>

<?php get_footer(); ?>
