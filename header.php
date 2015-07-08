<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> -->
    <title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset');?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    
    <!--<script type="text/javascript" src="js/smoothing-scroll.js"></script>-->

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/fontawesome/css/font-awesome.min.css"/> -->
    <link href="<?php bloginfo('template_url'); ?>/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/libs/animate.css/animate.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/news/media.css">

	<!-- HOME -->
	<!--<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!--<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/home/bootstrap.css">  <!-- -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/home/style.css">
	<!-- /HOME -->
	
	<!-- Gallery, About -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--<link rel="shortcut icon" href="favicon.ico" /> -->
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> <!-- -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" />
	<!--<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/galleryabout/main.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/galleryabout/components.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/galleryabout/media.css" />
	<!-- /Gallery, About -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <?php wp_get_archives('type=monthly&format=link'); ?>
 <!--   <script type="text/javascript">
        window.selectedMenu = "News";

        new WOW().init();
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() != 0) {
                    $('#top').fadeIn();
                } else {
                    $('#top').fadeOut();
                }
            });
            $('#top').click(function () {
                $('body,html').animate({scrollTop: 0}, 800);
            });
        });
    </script>  -->
</head>
<body>
<header>
<div class="menu_panel">
    <div class="menu_panel_inner_container">
        <a class="icon">
            <img class="logo" src="<?php bloginfo('template_url'); ?>//img/logo.png">
        </a>
        <div class="select_menu_tel"></div>
        <div class="news_buttons"></div>
    </div>
</div>
<div class="navigation_panel">
    <div class="container">
        <?php
        if(function_exists('bcn_display'))
        {
            bcn_display();
        }
        ?>
    </div>
</div>
</header>