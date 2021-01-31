<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Menus </title>
<meta content="" name="description">
<meta content="" name="keywords">



<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-between">
    <h1 class="logo"> <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/assets/img/image 7.png" alt="" /></a> </h1>
    <!-- Uncomment below if you prefer to use an image logo --> 
    <!-- <a href="index.html" class="logo mr-auto"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    <nav class="nav-menu d-none d-lg-block">
      
         <?php
            wp_nav_menu(
                array(
                    'theme_location'=>'top-menu',
                    'container'=>'ul'
                )
            )
            ?>

    </nav>
    <!-- .nav-menu -->
    <button class="btn btn-buy" type="submit">088 146 368</button>
  </div>
</header>
<!-- End Header --> 