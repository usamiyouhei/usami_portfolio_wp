<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php if (is_404()) : ?>
	      <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header js-header">
      <div class="header__inner">
        <a href="#" class="header__logo">
          <img src="<?php echo esc_url(get_theme_file_uri( "/images/logo.png" )); ?>" alt="ロゴ">
        </a>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="#" class="header__nav-link">固定ページ</a></li>
            <li class="header__nav-item"><a href="#" class="header__nav-link">通常投稿</a></li>
            <li class="header__nav-item"><a href="#" class="header__nav-link">カスタム投稿</a></li>
            <li class="header__nav-item"><a href="#" class="header__nav-link">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </header>