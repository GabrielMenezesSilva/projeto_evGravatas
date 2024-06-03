<!doctype html>
<html lang="fr-FR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php the_title(); ?></title>


  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">



  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />

  <?php 'wp_head'() ?>


</head>

<body>
  <header id="header">
    <!-- navigation -->
    <div class="container_flex hero">
      <div class="logo">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/submarca-d-agua-ev-gravatas.png" alt="Logo" /></a>
      </div>
        <input type="checkbox" id="menu-toggle" class="menu-toggle" />
                <label for="menu-toggle" class="burger-menu">&#9776;</label>
      <div class="menu-container">
        <?php wp_nav_menu(array("menu" => "Menu principal", "menu_class" => "navigation", "container_class" => "menu-container" )); ?>
      </div>

    </div>
  </header>