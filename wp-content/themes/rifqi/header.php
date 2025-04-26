<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?> Web Sekolah </title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
    <div class="container">
      <!-- <h1><a href="<?//php echo home_url(); ?>"><?//php bloginfo('name'); ?></a></h1>
      <p><?//php bloginfo('description'); ?></p> -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                 <a class="navbar-brand" href="#">Logo</a> -->
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <?//php
                //    wp_nav_menu([
                //    'theme_location' => 'main_menu',
                //    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                //    'container' => false
                //    ]);
                ?>
                </div>
            </div>
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo home_url(); ?>">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeri/">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak/">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            </nav>

        <section class="py-5 text-center bg-light">
            <div class="container">
            <h1 class="display-4">Selamat Datang!</h1>
            <p class="lead"><?php bloginfo('description'); ?></p>
            <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </div>
        </section>    
    </div>
  </header>

  

  