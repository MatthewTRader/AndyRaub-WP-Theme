<?php /* Template Name: Homepage Template */ get_header(); ?>

	<main role="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
        <section id="slider">
            <ul class="bxslider">
                <?php
                    $fields = CFS()->get( 'slide' );
                    foreach ( $fields as $field )
                    { ?>
                        <li style="background-position: <?php  $values = $field['image_position']; foreach ( $values as $key => $label ) { echo $label; } ?>; background-image:url(<?php echo $field['image']; ?>);" >
                          <h1><?php echo $field['header_text']; ?></h1>
                          <h2><?php echo $field['sub_header_text']; ?></h2>
                        </li>
                <?php } ?>
            </ul>
        </section>
        
        <section id="intro">
            <div class="container">
                <div class="row">
                    <div class="medium-7 columns image">
                        <img src="<?php echo CFS()->get( 'intro_image' ); ?>">
                    </div>
                    <div class="medium-5 columns text">
                        <h2><?php echo CFS()->get( 'intro_header' ); ?></h2>
                        <p><?php echo CFS()->get( 'intro_text' ); ?></p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="video">
            <div class="videoWrapper">
                <?php echo CFS()->get( 'video_iframe' ); ?>
            </div>
        </section>

        <?php the_content(); ?>
        
	</main>

<?php get_footer(); ?>
