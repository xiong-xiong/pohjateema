<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Title  from wordpress -->
    <title><?php
        wp_title('/', 'true', 'right');
        bloginfo ( 'name' )
        ?>
    </title>
    <!--Important for mediaqueries to work properly-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Head info from Wordpress -->
    <?php wp_head();?>
    <!-- Link style.css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css"> 

    <!-- GOOGLE FONTS HERE-->
    <link href="https://fonts.googleapis.com/css?family=Raleway+Dots|Raleway:300,400,500,600,700" rel="stylesheet">

  </head>
  
          
<body>
<header>
<div class="xiong-hero">

    <nav class="xiong-meta-nav">
      <div class="container">
        <div class="xiong-nav-wrap">
        <?php wp_nav_menu( array( 'theme_location' => 'meta-menu', 'container_class' => 'meta-nav', 'container' => 'nav' )); ?> 
        </div>   
      </div><!-- /container --> 
    </nav>

  <div class="container"> 
    <div class="row">

      <div class="col-md-7">
        <div id="xiong-site-logo">
        <a href="<?php echo site_url(); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>
        </div>
      </div><!--col-md-7 -->

      <div class="col-md-5">
        <div class="xiong-searchform"><?php get_search_form(); ?></div>
      </div>

    </div><!--row -->
  </div><!-- /container --> 

</div><!--xiong-hero -->

  <nav class="xiong-main-nav">
    <div class="container">
      <div class="xiong-nav-wrap">
      <div class="xiong-open-mobile-nav">Menu</div>
      <?php wp_nav_menu( array( 'theme_location' => 'mainnav', 'container_class' => 'main-nav', 'container' => 'nav' )); ?> 
      </div>   
    </div><!-- /container --> 
  </nav><!-- xiong-main-nav-->

</header>


