<?php get_header(); ?>

	<main role="main" class="blogArchives">
        <div class="container">
        <h1><?php _e( 'Latest Posts', '' ); ?></h1>
		<!-- section -->
		<section>
            
            <div class="row small-up-2 medium-up-3 large-up-4"  data-equalizer data-equalize-by-row="true">
             <?php
                $args = array( 'posts_per_page' => 12, 'category' => 'Featured', );
                $lastposts = get_posts( $args );
                foreach ( $lastposts as $post ) :
                  setup_postdata( $post ); ?>
                    <div class="column">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-equalizer-watch>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

                                <?php the_post_thumbnail('homeArticle'); // Declare pixel size you need inside the array ?>

                            <?php endif; ?>

                            <div class="textBox">

                                <h2>
                                    <?php the_title(); ?>
                                </h2>

                                <p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p>
                                <a class="readMore" href="<?php the_permalink(); ?>"><p>Read More</p></a>

                            </div>
                        </a>
                    </article>
                    </div>

                <?php endforeach; wp_reset_postdata(); ?>
                </div>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
        </div>
        <div class="clear"></div>
	</main>

<?php get_footer(); ?>