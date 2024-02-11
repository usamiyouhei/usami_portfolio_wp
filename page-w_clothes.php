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
            <h2 class="page-title">Clothes</h2>
            <a href="" class="shoes-link">https//usausausa.com</a>
          </div>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/clothes-fv.jpg")); ?>"
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
              <p class="contents__text">洋服屋さんのWebサイト（スクール製作）</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">ターゲット</h3>
              <p class="contents__text">20代〜40代の女性</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">目的</h3>
              <p class="contents__text">落ち着いた色合いのアパレル商品のPR</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">課題</h3>
              <p class="contents__text">
                生地の質感に拘った洋服を<br />
                知ってもらうにはどうしたらいいか<br />
                沢山の画像を使って動きをつけました
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">デザイン</h3>
              <p class="contents__text">極力シンプルで見やすい工夫を心がけました。</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">製作範囲</h3>
              <p class="contents__text">１週間</p>
            </li>
          </ul>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/clothes-img2.jpg")); ?>"
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