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
            <h2 class="page-title">Web Design</h2>
          </div>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/figma-fv.jpg")); ?>"
            alt="Figmaを使用したデザインカンプ"
            class="fv-img"
            loading="lazy"
          />
        </div>
      </section>

      <section class="contents">
        <div class="contents__inner inner">
          <ul class="contents__items">
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">Web Design</h3>
              <p class="contents__text">自身のポートフォリオ</p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">制作過程</h3>
              <p class="contents__text">
                普段、デザートやお菓子はアートになるので<br />
                お洒落さやシズル感が重要視されます。<br />

                デザインの視野で構築するのがとても勉強になりました。<br />
                ロゴ製作のアイデアも引き出しがあるので、<br />
                様々なことにチャレンジしていきたいです。
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">目的</h3>
              <p class="contents__text">
                Webサイト制作のデザインから学ぶことにより全体像を把握する。
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">課題</h3>
              <p class="contents__text">
                常に情報をアップデートし、良いデザインを学び続けたいです。<br />
                職業柄、閃くことも多いので掛け算や引き算を意識していきます。
              </p>
            </li>
            <li class="contents__item fade-in fade-in-up">
              <h3 class="contents-title">デザイン</h3>
              <p class="contents__text">
                最初はグレーやグリーンのイメージで<br />
                ポートフォリオのデザインを組んでいましたが、<br />
                華やかなデザートの写真が多いので<br />
                ピンクやオレンジ系で明るく仕上げました。<br />
                様々なアニメーションも付けて、見ていて飽きないような<br />
                工夫をしました。
              </p>
            </li>
          
          </ul>
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/figma-img2.jpg")); ?>"
            alt="Figmaデザイン"
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