<?php get_header(); ?>

	<main role="main">
        <div class="container">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', '' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', '' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
        </div>
        <div class="clear"></div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
