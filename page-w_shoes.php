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
            <h2 class="page-title">Shoes</h2>
            <a href="<?php echo esc_url(home_url('')); ?>" class="shoes-link"></a>
          </div>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/shoes.jpg")); ?>"
            alt="革靴を履いた人が歩いている足元の動画"
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
              <p class="contents__text">靴屋さんのWebサイト（スクール製作）</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">ターゲット</h3>
              <p class="contents__text">30代〜50代のビジネスマン</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">目的</h3>
              <p class="contents__text">革にこだわりのある革靴店の商品PR</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">課題</h3>
              <p class="contents__text">
                若いビジネスマンから年配の方まで、革靴の魅力や<br />
                革の良さを知ってもらう。
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">デザイン</h3>
              <p class="contents__text">革靴を実際に履いているようなイメージをしてもらうために動画を取り入れました。</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">製作範囲</h3>
              <p class="contents__text">１週間</p>
            </li>
          </ul>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/shoes-img2.jpg")); ?>"
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