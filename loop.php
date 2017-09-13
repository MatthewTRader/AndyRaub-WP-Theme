<div class="row">
<?php if ( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>
	<!-- article -->
	<article class="medium-6 columns" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       
        <!-- post title -->
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>
        <!-- /post title -->
        
        <!-- post thumbnail -->
        <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail(array(400,400)); // Declare pixel size you need inside the array ?>
            </a>
        <?php endif; ?>
        <!-- /post thumbnail -->

        <p><?php echo wp_trim_words( get_the_content(), 60, '...' ); ?> <a class="readMore" href="<?php the_permalink(); ?>">Read More</a></p>

        <br class="clear" />

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
</div>