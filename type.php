<?php

/*
Template Name: type
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
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/type.css">
  <?php wp_deregister_script('jquery'); ?>
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Cat File</title>
</head>
  <header>
  <?php
      if ( has_nav_menu( 'header' )){
          // メニューの設定を配列で指定
          $args = array(
              'theme_location' => 'header',
              'container' => false,
              'items_wrap'      => '<ul class="nav-menu">%3$s</ul>',
          );
          wp_nav_menu( $args ); 
      }; 
    ?>
  </header>
  <main>
    <h1>色々な猫</h1>

    <ul id=lists class="blog-wrapper">
    <?php
      global $post;
      $args = array( 'posts_per_page' => 8 );
      $myposts = get_posts( $args );
      foreach( $myposts as $post ) {
        setup_postdata($post);
      ?>
<li id="post-<?php the_ID(); ?>" class="blog-inner">
    <a href="<?php the_permalink(); //詳細へのリンク ?>">
        <?php the_post_thumbnail('index_thumbnail'); ?></a>
        <div class="blog-text">
          <p><a href="<?php the_permalink(); //詳細へのリンク ?>"><?php the_title(); ?></a></p>
          <p><?php the_time('Y年m月d日'); ?></p>
          <div class="read-wrapper">
          <?php the_excerpt(); //本文抜粋 ?>
            <p><a href="<?php the_permalink(); //詳細へのリンク ?>">続き</a></p>
          </div>
        </div>
  </li>
<?php
}
wp_reset_postdata();
?>
</ul>

  </main>

<body>
    


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.autopager-1.0.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
</body>
</html>