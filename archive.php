<?php get_header(); ?>

	<main role="main" class="archives">
	<div class="container">
		<!-- section -->
		<section>

			<h1><?php _e( 'Archives', '' ); ?></h1>
            
			 <?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
        <div class="clear"></div>
        </div>
	</main>

<?php get_footer(); ?>
