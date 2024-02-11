<?php get_header(); ?>

<main>
<?php if (function_exists('bcn_display')) { ?>
            <div class="about__breadcrumb">
                <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                    <?php bcn_display(); ?>
                </div>
            </div>
        <?php } ?> 
      <section class="fv fade-in fade-in-up">
        <div class="fv__inner inner">
          <div class="fv__head">
            <h2 class="page-title">Green tree</h2>
            <a href="<?php echo esc_url(home_url('')); ?>" class="shoes-link"></a>
          </div>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/green-fv.jpg")); ?>"
            alt="沢山の野菜の写真"
            class="fv-img"
            loading="lazy"
          />
        </div>
      </section>

      <section class="contents">
        <div class="contents__inner inner">
          <ul class="contents__items">
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">コンセプト</h3>
              <p class="contents__text">野菜の通販Webサイト（スクール製作）</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">ターゲット</h3>
              <p class="contents__text">30代〜50代の健康志向な男女</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">目的</h3>
              <p class="contents__text">
                無農薬産地直送の美味しい野菜をお届けするPR
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">課題</h3>
              <p class="contents__text">
                野菜の美味しさ、魅力の出し方に配慮した動きやカラーに<br />
                仕上げました。
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">デザイン</h3>
              <p class="contents__text">
                野菜イメージの緑や黄色の配色でまとめました
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">製作範囲</h3>
              <p class="contents__text">１週間</p>
            </li>
          </ul>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/green-img2.jpg")); ?>"
            alt="野菜のお試しセットの写真"
            class="contents__img fade-in fade-in-up"
            loading="lazy"
          />
        </div>
      </section>

      <a class="read-more__button" href="<?php echo esc_url(home_url("/contact")); ?>" target="_blank">
        <span>Contact</span>
      </a>
       </main>
    <?php get_footer(); ?>