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
    <style>
        h3, h4, h5, h6 {
            color: <?php echo get_theme_mod( 'header_font_color' ); ?>;
        }
        
        h1, h2, main.blogArchives article h2 {
            color: <?php echo get_theme_mod( 'header-2_font_color' ); ?>;
        }
        
        p, ul li, ol li {
            color: <?php echo get_theme_mod( 'paragraph_font_color' ); ?>;
        }
    
    </style>
<body <?php body_class(); ?>>
    <?php show_admin_bar( true ); ?>

    <header class="header clear" role="banner">

    </header>

