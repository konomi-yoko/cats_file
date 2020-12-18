<?php

/*
Template Name: Emotions
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
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/emotions.css">
  <?php wp_deregister_script('jquery'); ?>
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Cat File</title>
</head>



<body>
<!-- header -->
  <header>
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

  <main>
    <h1>猫の気持ち</h1>
    <div class="main-wrapper">
      <div class="phot slidein">
        <img src="<?php echo get_template_directory_uri(); ?>/img/emot1.jpg" alt="">
      </div>
      <div class="phot-text animation">
        <p>人間と同じで<br>
      嬉しい時は目を細め、怒っているときは目を吊り上げて歯をむき出しにし、悲しい時は目が垂れている。<br>
      表情豊かな猫たちは、<br>
      それ以外にもしっぽで感情を見分けることができます。</p>
      </div>
      <div class="phot-bg slide-right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kirakira.jpg" alt="">
      </div>
    </div>

    <div class="tail-wapper">
      <h2>しっぽの感情</h2>
      <ul class="tail-inner">
        <li>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/feel1.gif" alt="">
          </div>
            <p class="tail-txt">
              甘えたい
            </p>
        </li>
        <li>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/feel2.gif" alt="">
          </div>
            <p class="tail-txt">
              う、う˝れじい…!!
            </p>
        </li>
        <li>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/feel3.gif" alt="">
          </div>
            <p class="tail-txt">
              しょんぼり
            </p>
        </li>
        <li>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/feel4.gif" alt="">
          </div>
            <p class="tail-txt">
              いかく、こわい…
            </p>
        </li>
        <li>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/feel5.gif" alt="">
          </div>
            <p class="tail-txt">
              俺にかまうな
            </p>
        </li>
        <li>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/feel6.gif" alt="">
          </div>
            <p class="tail-txt">
              ほっ(リラックス)
            </p>
        </li>
      </ul>

    </div>
  </main>

  



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.autopager-1.0.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
</body>
</html>