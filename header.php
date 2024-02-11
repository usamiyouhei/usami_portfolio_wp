<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php if (is_404()) : ?>
    <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
<?php endif; ?>
    <!-- meta情報 -->
    <title>youhei-usami portfolio top</title>
    <meta name="description" content="パティシエ兼プログラマー、宇佐美洋平のポートフォリオ" />
    <meta name="keywords" content="宇佐美洋平 ポートフォリオ" />
    <!-- ogp -->
    <meta property="og:title" content="youhei_usami portfolio" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://youhei-usami.com/" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="youhei-usami portfolio" />
    <meta property="og:description" content="" />
    <meta name="twitter:card" content="summary" />
    <!-- ファビコン -->
    <link rel="icon" href="./img/favicon (3).ico" />

    <!-- font-awesome -->
    <!-- <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    /> -->
    <!-- Google Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,200;1,300;1,400;1,500;1,600&family=Italianno&family=Hurricane&display=swap"
      rel="stylesheet"
    /> -->
    <!-- font-awesome -->
    <!-- <script
      src="https://kit.fontawesome.com/b055b2123e.js"
      crossorigin="anonymous"
    ></script> -->
    <!-- CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-26/css/5-1-26.css"> -->

    <!-- <link rel="stylesheet" href="./css/reset.css" /> -->
    <!-- <link rel="stylesheet" href="/css/style.css" /> -->

    <!-- ファーストビューの背景画像を先に読み込む -->
    <!-- <link rel="preload" as="image" href="./img/kv-img1.jpg" />
    <link rel="preload" as="image" href="" /> -->

    <!-- JavaScript -->
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.6.1.min.js"
      integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
      crossorigin="anonymous"
      defer
    ></script> -->

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <!-- header -->
    <header class="header" id="header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="<?php echo esc_url(home_url("/")) ?>"
            ><img src="<?php echo get_template_directory_uri(); ?>/img/youhei-usami-logo.svg" alt="宇佐美洋平 名前のロゴ"
          /></a>
        </h1>

        <nav class="header__nav md-none" id="header-nav">
          <ul class="header__items">
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/#about")); ?>" class="header__link">About</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/#service")) ?>" class="header__link">Service</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/#news")) ?>" class="header__link">News</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/#works")) ?>" class="header__link">Works</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url("/#contact")) ?>" class="header__link--contact"
                ><span>Contact</span></a
              >
            </li>
          </ul>
        </nav>
      </div>
      <!-- <div class="header hamburger"> -->
      <!-- <span>MENU</span> -->
      <div class="hamburger-button md-show">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="header slide-menu">
        <ul class="slide-menu__items">
          <li class="slide-menu__item">
            <a href="<?php echo esc_url(home_url("/#about")) ?>" class="slide-menu__link">About</a>
          </li>
          <li class="slide-menu__item">
            <a href="<?php echo esc_url(home_url("/#service")); ?>" class="slide-menu__link">Service</a>
          </li>
          <li class="slide-menu__item">
            <a href="<?php echo esc_url(home_url("/#news")); ?>" class="slide-menu__link">News</a>
          </li>
          <li class="slide-menu__item">
            <a href="<?php echo esc_url(home_url("/#works")); ?>" class="slide-menu__link">Works</a>
          </li>
          <li class="slide-menu__item">
            <a
              href="<?php echo esc_url(home_url("/#contact")); ?>"
              class="slide-menu__link slide-menu__link--contact"
              >Contact</a
            >
          </li>
        </ul>
        <div class="icon-button" id="elementToToggle">
          <a href="<?php echo get_template_directory_uri(); ?>https://twitter.com/" 
            ><i class="fa-brands fa-x-twitter"></i
          ></a>
          <a href="<?php echo get_template_directory_uri(); ?>https://www.instagram.com/" 
            ><i class="fa-brands fa-square-instagram"></i
          ></a>
          <a href="<?php echo get_template_directory_uri(); ?>https://www.facebook.com/"
            ><i class="fa-brands fa-facebook"></i
          ></a>
          <a href="<?php echo get_template_directory_uri(); ?>https://github.com/usamiyouhei"
            ><i class="fa-brands fa-github"></i
          ></a>
          <a href="<?php echo get_template_directory_uri(); ?>https://www.youtube.com/"
            ><i class="fa-brands fa-youtube"></i
          ></a>
        </div>
      </nav>
      <!-- </div> -->
    </header>