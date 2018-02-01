<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must 

come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo('name')?> – <?php is_front_page() ? bloginfo('description') : wp_title();?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url')?>/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->


    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><!

[endif]-->
    <!--    <script src="js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <?php wp_head();?>
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
             <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
        </nav>
    </div>
</div>
<div class="container">
    <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name');?></h1>
        <p class="lead blog-description"><?php bloginfo('description');?></p>
    </div>