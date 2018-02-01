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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head();?>
    <style>
        .showcase {
            background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat;
        }
    </style>
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
      <section class="showcase">
        <div class="container">
            <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
            <p><?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'); ?></p>
            <a href="<?php echo get_theme_mod('btn_url', 'http://google.com.ua'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
        </div>
    </section>
    
    <section class="boxes">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                   <?php if(is_active_sidebar('box1')) : ?>
                     <?php dynamic_sidebar('box1'); ?>
                   <?php endif; ?>         
              </div>
              
              <div class="col-md-4">
                   <?php if(is_active_sidebar('box2')) : ?>
                     <?php dynamic_sidebar('box2'); ?>
                   <?php endif; ?>
              </div>
              
              <div class="col-md-4">
                   <?php if(is_active_sidebar('box3')) : ?>
                     <?php dynamic_sidebar('box3'); ?>
                   <?php endif; ?>
              </div>
           </div>
        </div>
    </section>

<footer class="blog-footer">
    <p>&copy; <?php echo Date('Y');?> - <?php bloginfo('name');?> </p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
<?php wp_footer();?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
<!--
     IE10 viewport hack for Surface/desktop Windows 8 bug
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
-->
</body>
</html>