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
    <h1>Latest Articles</h1>
    <ul id=lists class="blog-wrapper">
      <?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>
      <li id="post-<?php the_ID(); ?>" class="blog-inner">
        <a href="<?php the_permalink(); //詳細へのリンク ?>">
							<?php the_post_thumbnail('medium'); ?>		
							</a>
        <div class="blog-text">
          <p><?php the_time('Y / m / d /'); ?></p>
          <p><a href="<?php the_permalink(); //詳細へのリンク ?>"><?php the_title(); ?></a></p>
          <div class="read-wrapper">
            <p><a href="<?php the_permalink(); //詳細へのリンク ?>">READ MORE</a></p>
            <span class="read-border"></span>
          </div>
        </div>
      </li>
      <?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
    </ul>

    <?php if($paged < $lists->max_num_pages) {?>
    <div class="more-wrapper moreread" id="next">
      <p>
      <a href="<?php echo next_posts($lists->max_num_pages, false); ?>">もっと見る</a>
      </p><i class="fas fa-chevron-right"></i>
      <img id="loading" src="<?php echo get_template_directory_uri() ?>/loading.gif" alt="読み込み中"  width="29" height="29">
    </div>
    <?php }?>




  </main>

<body>
    


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.autopager-1.0.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
</body>
</html>