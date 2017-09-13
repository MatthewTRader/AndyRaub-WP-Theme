<?php get_header(); ?>

	<main role="main" class="archives">
	<div class="container">
		<!-- section -->
		<section>

			<h1><?php _e( 'Tag Archive: ', '' ); echo single_tag_title('', false); ?></h1>
            
			 <?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
       </div>
        <div class="clear"></div>
	</main>

<?php get_footer(); ?>
