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
            <h2 class="page-title">Camp Gallery</h2>
            <a href="<?php echo esc_url(home_url('')); ?>#" class="shoes-link"></a>
          </div>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/camp-fv-img.jpg")); ?>"
            alt=""
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
              <p class="contents__text">個人のブログサイト（スクール製作）</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">ターゲット</h3>
              <p class="contents__text">30代〜50代のキャンパー</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">目的</h3>
              <p class="contents__text">キャンプが趣味の人に情報を届ける</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">課題</h3>
              <p class="contents__text">
               個人ブログの閲覧数の上げ方の工夫
                
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">デザイン</h3>
              <p class="contents__text">
                多数のキャンプ用品に動きをつけて目に留まるように心掛けた。
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">製作範囲</h3>
              <p class="contents__text">
                １週間
              </p>
            </li>
          </ul>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/camp-img2.jpg")); ?>"
            alt="沢山の革靴"
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