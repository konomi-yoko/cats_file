<?php

/*
Template Name: about
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Corben:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
  <?php wp_deregister_script('jquery'); ?>
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Cat File</title>
</head>

<body>
    <header>
        <!-- header -->
        <nav>
          <ul class="nav-menu">
            <li>Home</li>
            <li>About</li>
            <li>History</li>
            <li>Emotions</li>
            <li>Foods</li>
            <li>Type</li>
          </ul>
        </nav>
        
    </header>

<div class="swiper-container">
    <ul class="swiper-wrapper">
        <li class="swiper-slide cat1">
          <ul class="anime-wrapper">
            <li class="anime1 animation">気が付けば</li>
            <li class="anime2 animation">猫たちはいつも</li>
            <li class="anime3 animation">そばに居ます</li>
          </ul>
        </li>
        <li class="swiper-slide cat2">
          <ul class="anime-wrapper">
            <li class="anime1 animation">遥か昔から</li>
            <li class="anime2 animation">人に寄り添って</li>
            <li class="anime3 animation">生活する猫たち</li>
          </ul>
        </li>
        <li class="swiper-slide cat3">
          <ul class="anime-wrapper">
            <li class="anime1 animation">これは、</li>
            <li class="anime2 animation">そんな彼らを</li>
            <li class="anime3 animation">少しでも知って</li>
            <li class="anime4 animation">もらうための</li>
            <li class="anime5 animation">ファイルです</li>
          </ul>
        </li>
        <li class="swiper-slide cat4">
          <ul class="info-wrapper">
            <li class="info1">
              <a href="#">
                <button>
                  <p>History</p>
                </button>
              </a>
              <a href="#">
                <button>
                  <p>Emotions</p>
                </button>
              </a>
            </li>
            <li class="info2">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/silhouette.png" alt="">
              </div>
              <a href="">
                <h1>Cats File</h1>
              </a>
            </li>
            <li class="info3">
              <a href="#">
                <button>
                  <p>Foods</p>
                </button>
              </a>
              <a href="#">
                <button>
                  <p>Foods</p>
                </button>
              </a>
            </li>
          </ul>

        </li>
    </ul>
    <div class="swiper-pagination"></div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.autopager-1.0.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
</body>
</html>