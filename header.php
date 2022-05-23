<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Mi Mac</title>
    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.png" sizes="any">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bundle.min.css">
    <?php wp_head(); ?>
</head>

<body>

    <!--header-->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" class="img-fluid" alt="Mi Mac" title="Mi Mac" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu(array( 
                        'theme_location' => 'menu-main',
                        'menu_class'     => 'navbar-nav',
                     )); ?>
                </div>
            </div>
        </nav>
    </header>
    <!--End header-->