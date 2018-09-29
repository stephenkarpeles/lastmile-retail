<!doctype html>
<html class="no-js" lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <?php
      // If canonical URL is specified, include canonical link element
      if($pageCanonical) {
        echo '<link rel="canonical" href="' . $pageCanonical . '">';
      }
      // If meta robots content is specified, include robots meta tag
      if($pageRobots) {
        echo '<meta name="robots" content="' . $pageRobots . '">';
      }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">

    <!-- Main Styles -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <header class="header">    
      <div class="header__container">

        <div class="header__tagline">
          <span>From Browse to Buy</span>
        </div>

        <a href="/" class="header__logo">
          <img src="img/logo.svg" alt="Lastmile Retail">
        </a>

        <div class="header__right-block">
          <div class="header__page-marker">
            <span><?php echo $navPageName; ?></span>
          </div>

          <div class="header__menu-trigger">
            <span></span>
            <span></span>
            <span></span>
          </div> 

          <nav class="header__nav">
            <div class="header__container">
              <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/shopper-journey.php">Shopper Journey</a></li>
                <li><a href="#">Menu Item 3</a></li>
                <li><a href="#">Menu Item 4</a></li>
              </ul>
              <a class="btn btn--primary btn--medium">Demo</a>
            </div>
          </nav>  
        </div> 

      </div>
    </header>

    <main>