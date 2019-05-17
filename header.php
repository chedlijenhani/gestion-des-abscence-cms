<!doctype html>
<html lang="en">
  <head>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css">
  </head>
  <body>
    

    <div class="wrap">

      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
                <a href="<?php echo get_option('twitter'); ?>"><span class="fa fa-twitter"></span></a>
                <a href="<?php echo get_option('facebook'); ?>"><span class="fa fa-facebook"></span></a>
                <a href="<?php echo get_option('instagram'); ?>"><span class="fa fa-instagram"></span></a>
                <a href="<?php echo get_option('youtube'); ?>"><span class="fa fa-youtube-play"></span></a>
              </div>
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                <form action="#" class="search-top-form">
                  <span class="icon fa fa-search"></span>
                  <input type="text" id="s" placeholder="Type keyword to search...">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="<?php get_bloginfo('wpurl');?>">Gestion des absences </a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="<?php bloginfo('template_directory');?>/index.php">Home</a>
                </li>
				<li class="nav-item">
                  <span class="nav-link active" ><?php wp_nav_menu( array( 'theme_location' => 'nav-menu' ) ); ?></span>
                </li>
				
                <li class="nav-item">
                  <a class="nav-link" href="<?php bloginfo('template_directory');?>/about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php bloginfo('template_directory');?>/contact.php">Contact</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
		<?php wp_head();?>
      </header>
   