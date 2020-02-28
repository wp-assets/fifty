<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">
    
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="discrption" content="Fabon Personal Portfolio Template">
    <meta name="keyword" content="creative, business, freelancer, agency, responsive, corporate, interior, minimal, modern, personal, portfolio, simple">
    <meta name="author" content="Themescare">

    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900|Titillium+Web:200,300,400,600,700" rel="stylesheet">
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">   
<?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header>
        <div class="logo">
            <div class="center-circle"></div>
        </div>

        <div class="menu">
          <?php
             wp_nav_menu( array(
                 'menu'              => 'Main Menu',
                 'theme_location'    => 'header_menu',
                 'container_class'   => 'menu',
                 'menu_class'         => 'menu-item-box active',
                 'walker'            => new fifty_Walker(),
                 )
             );
          ?>
        </div>

        <div class="go-down"> <i class="lnr-arrow-down lnr"></i> </div>
    </header>
       <div class="content">
       


<!--
    <div class="menu-item-box active">
    <a href="#" class="menu-item" data-link=".hero-section">
    <i class="menu-item-icon lnr lnr-home"></i>
    </a> 
    <span class="menu-item-name sec-font">home</span>
    </div>

    <div class="menu-item-box"> <a href="#" class="menu-item" data-link=".about"><i class="menu-item-icon lnr lnr-user"></i></a> <span class="menu-item-name sec-font">about</span> </div>

    <div class="menu-item-box"> <a href="#" class="menu-item" data-link=".services"><i class="menu-item-icon lnr lnr-star"></i></a> <span class="menu-item-name sec-font">services</span> </div>

    <div class="menu-item-box"> <a href="#" class="menu-item" data-link=".portfolio"><i class="menu-item-icon lnr lnr-briefcase"></i></a> <span class="menu-item-name sec-font">portfolio</span> </div>

    <a href="#" class="menu-item" data-link=".blog"><i class="menu-item-icon lnr lnr-book"></i></a> <span class="menu-item-name sec-font">blog</span>
    
    <div class="menu-item-box"> <a href="#" class="menu-item" data-link=".contact"><i class="menu-item-icon lnr lnr-envelope"></i></a> <span class="menu-item-name sec-font">contact</span> </div>
-->