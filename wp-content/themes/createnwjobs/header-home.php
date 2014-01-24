<!DOCTYPE html>
    <!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="style.css" rel="stylesheet" />
        <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
        <?php wp_head(); ?>
    </head>
    <body id="body">
        <div id="head-wrap">
        <div id="header" class="container">
            <h1>Alliance for Northwest Jobs & Exports</h1>
            <h2 class="head-desc">Will we bring thousands of new jobs here or will we let them pass us by?</h2>
        </div>
            <div id="slide-show" class="container">
                <img src="assets/images/slide-image.PNG" class="img-responsive" />
            </div><!--End of slide-show div-->
            <div id="nav-wrapper">
                <nav id="nav-wrap">
                     <a href="#" class="showMenu">Menu</a>
                     <?php wp_nav_menu( array(
                                'container'=>'',
				'theme_location' =>'primary',
                                'menu' => 'Primary Main',
				'menu_class'=>'links',
				)); ?>
                    <ul class="social-links">
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="youtube-black"><a href="#">Youtube</a></li>
				<li class="google-plus"><a href="#" rel="publisher">Google+</a></li>
			</ul>

                </nav><!--End of nav-wrap nav-->
            </div><!--End of nav-wrapper div-->
    </div><!--End of head-wrap div-->