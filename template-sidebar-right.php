<?php /* Template Name: Page with right sidbar */ get_header(); ?>

	<?php get_header(); ?>

	<main role="main">
        
        <div class="container">
            <!-- section -->
            <section class="medium-9 columns">

<!--
                <h1>
                    <?php 
//                        the_title();
                    ?>
                </h1>
-->

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                    <br class="clear">

                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h2><?php _e( 'Sorry, nothing to display.', '' ); ?></h2>

                </article>
                <!-- /article -->

            <?php endif; ?>

            </section>
            <!-- /section -->
            
            <?php get_sidebar(); ?>
            
        </div>
        <div class="clear"></div>
	</main>

<?php get_footer(); ?>