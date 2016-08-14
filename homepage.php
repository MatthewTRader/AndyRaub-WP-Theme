<?php /* Template Name: Homepage Template */ get_header(); ?>

	<main role="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h1><?php the_title(); ?></h1>

		      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                
                <section id="slider">
                    <ul class="bxslider">
                        <?php
                            $fields = CFS()->get( 'Homepage Slider' );
                            foreach ( $fields as $field ) { ?>
                                <li><img style="background-position: <?php echo $field['image_position']; ?>" src="<?php echo $field['image']; ?>" />
                                  <h1><?php echo $field['header_text']; ?></h1>
                                  <h2><?php echo $field['sub_header_text']; ?></h2>
                                </li>
                        <?php } ?>
                    </ul>
                </section>

				<?php the_content(); ?>

		<?php endwhile; ?>

		<?php endif; ?>
        
	</main>

<?php get_footer(); ?>
