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
                    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
                </a>

                <nav class="nav" role="navigation">
                    <?php _nav(); ?>
                </nav>

                <div id="headerTop">
                    <a href=""><span class="login">Login</span></a>
                    <div class="search">
                        <input type="text">
                        <label></label>
                    </div>
                </div>
                
            </div>

        </header>
