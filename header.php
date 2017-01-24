<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

        <header class="header clear" role="banner">
            
            <div class="container">

                <a href="<?php echo home_url(); ?>">
                    <img id="logo" src="<?php echo get_theme_mod( 'ec_logo' ) ?>" alt="Logo">
                </a>
                
                <i class="fa fa-bars mobileMenuButton" aria-hidden="true"></i>

                <nav class="nav" role="navigation">
                    <?php wp_nav_menu( array('menu' => 'Main', 'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu>%3$s</ul>' )); ?>
                </nav>

                <div id="headerTop">
                    <a href=""><span class="login">Login</span></a>
                    <div class="search">
                        <?php get_template_part('searchform'); ?>
                        <label></label>
                    </div>
                </div>
                
            </div>

        </header>
