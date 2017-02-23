<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
        <meta charset="<?php bloginfo('charset'); ?>" />

        <title><?php if(is_home()) { echo bloginfo("name"); echo " | "; echo bloginfo("description"); } else { echo wp_title(" | ", false, right); echo bloginfo("name"); } ?></title>
        <meta name="description" content=" " />
        <meta name="author" content="Birdinkweb.com Sam" />

        <!-- Force IE to use latest rendering engine and set up mobile device viewport -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta name="format-detection" content="telephone=no" />

        <!-- Identify Pingback URL and include FavIcon -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="<?php echo getRelativeThemeUrl(); ?>/images/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo getRelativeThemeUrl(); ?>/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo getRelativeThemeUrl(); ?>/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo getRelativeThemeUrl(); ?>/images/apple-touch-icon-114x114.png">

        <!-- CSS - Foundation Zurb
        ================================================== -->
        <link rel="stylesheet" href="<?php echo getRelativeThemeUrl(); ?>/css/foundation.css" />

        <!-- CSS - web fonts
        ================================================== -->
        <link rel="stylesheet" href="<?php echo getRelativeThemeUrl(); ?>/css/webfonts.css" />

        <!-- CSS - Iconfonts
        ================================================== -->
        <link rel="stylesheet" href="<?php echo getRelativeThemeUrl(); ?>/css/iconfonts.css" />

        <!-- CSS - theme styling
        ================================================== -->
        <link rel="stylesheet" href="<?php echo getRelativeThemeUrl(); ?>/css/style.css" />

        <!-- CSS - theme styling - mobile menu
        ================================================== -->
        <link rel="stylesheet" href="<?php echo getRelativeThemeUrl(); ?>/css/slicknav.css" />

        <!-- CSS - theme Carousel
        ================================================== -->
        <link rel="stylesheet" href="<?php echo getRelativeThemeUrl(); ?>/css/owl.carousel.css" />

        <!-- CSS - theme styling -responsive media queried
        ================================================== -->
        <link rel="stylesheet" href="<?php echo getRelativeThemeUrl(); ?>/css/responsive.css" />

        <!-- All JavaScript at the bottom, except for Modernizr and jQuery -->
        <script src="<?php echo getRelativeThemeUrl(); ?>/js/vendor/modernizr.js"></script>        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo getRelativeThemeUrl(); ?>/js/vendor/jquery.js"><\/script>')</script>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
