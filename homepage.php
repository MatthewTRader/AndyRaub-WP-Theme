<?php /* Template Name: Homepage Template */ get_header(); ?>

	<main role="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php
           if ($site_address = $cfs->get('announcement')) {
               ?> <section id="anouncement" style="background:<?php echo CFS()->get( 'background_color' ); ?>;"> <?php
                    echo CFS()->get( 'annoucement_text' );
              ?> </section> <?php
        } ?>
           
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
        
        <section id="statement">
            <div class="container">
                <h2><?php echo CFS()->get( 'statement' ); ?></h2> 
            </div>
        </section>
        
        <section id="video">
            <div class="videoWrapper">
                <?php echo CFS()->get( 'video_iframe' ); ?>
            </div>
        </section>
        
         <section id="intro">
            <div class="container">
                <div class="row">
                    <div class="large-7 columns image">
                        <img src="<?php echo CFS()->get( 'intro_image' ); ?>">
                    </div>
                    <div class="large-5 columns text">
                        <h2><?php echo CFS()->get( 'intro_header' ); ?></h2>
                        <p><?php echo CFS()->get( 'intro_text' ); ?></p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="benefits">
            <div class="container">
                 <h2><?php echo CFS()->get( 'form_header' ); ?></h2>
                 <div class="benefits">
                    <?php
                        $fields = CFS()->get( 'benefits' );
                        foreach ( $fields as $field )
                    { ?>
                        <div class="benefit">
                          <img src="<?php echo $field['benefit_image']; ?>"><br>
                          <p><?php echo $field['benefit_description']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        
        <section id="articles">
             <div class="container">
                 <div class="row">
                     
                    <?php
                        $args = array( 'posts_per_page' => 2, 'category' => 'Featured', );
                        $lastposts = get_posts( $args );
                        foreach ( $lastposts as $post ) :
                          setup_postdata( $post ); ?>

                            <article id="post-<?php the_ID(); ?>" class="large-6 columns">
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

                        <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        
	</main>

<?php get_footer(); ?>
