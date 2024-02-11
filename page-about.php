<?php get_header(); ?>
<?php if (function_exists('bcn_display')) { ?>
            <div class="about__breadcrumb">
                <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                    <?php bcn_display(); ?>
                </div>
            </div>
        <?php } ?>
<section class="about__html" id="About">
      <div class="about__container-html inner">
        <div class="about__top">
          <!-- <div class="about__title section-title">
            <span class="section-title__main">About</span>
            <h2 class="section-title__sub">自己紹介</h2>
          </div> -->

          <div class="career inner">
            <div class="career__title section-title">
              <div class="about__title section-title">
                <span class="section-title__main">Career</span>
                <h2 class="section-title__sub">経歴</h2>
              </div>
             
            </div>
            <div class="career__inner fade-in fade-in-up">
              <div class="career__wrap">
                <dl class="career__items">
                  <dt>2003年</dt>
                  <dd>愛知工業高校卒業</dd>
                  <dt>2003年</dt>
                  <dd>株式会社エーデルワイス入社</dd>
                  <dt>2008年</dt>
                  <dd>西日本洋菓子コンクール最優秀賞受賞</dd>
                  <dt>2011年</dt>
                  <dd>株式会社ペニンシュラ東京入社</dd>
                  <dt>2012年</dt>
                  <dd>株式会社浦和ロイヤルパインズホテル入社</dd>
                  <dt>2013年</dt>
                  <dd>都内のデザートコンクール決勝進出</dd>
                  <dt>2014年</dt>
                  <dd>
                    レストランアップステアーズ<br />
                    シェフパティシエ
                  </dd>
                  <dt>2016年</dt>
                  <dd>
                    ミシュラン２つ星 レストラン<br />
                    レミニセンス シェフパティシエ
                  </dd>
                  <dt>2019年</dt>
                  <dd>
                    Dessert une Assiette<br />
                    オーナーシェフパティシエ 現職
                  </dd>
                  <dt>2024年</dt>
                  <dd>
                    ポートフォリオ完成<br />
                    適宜、追加します。
                  </dd>
                </dl>
              </div>
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/my-photo.jpg"
                alt="本人の写真"
                class="my-photo__img"
              />
            </div>
            <div class="introduction__inner inner fade-in fade-in-up">
              <div class="introduction__text">
                <p>
                  自店では<br
                    class="sp-show md-none"
                  />『他では食べられない、<br
                    class="md-show"
                  />唯一無二のデザート』<br />
                  をテーマにした、四季折々の食材を<br
                    class="md-show"
                  />使ってデザートに<br />
                  仕立てております。
                </p>
                <p>
                  技術力を高める為、<br
                    class="sp-show md-none"
                  />日々の研鑽に<br class="md-show" />努めておりまして、<br />
                  お菓子、料理、<br
                    class="sp-show md-none"
                  />プログラミング、<br
                    class="md-show"
                  />写真など好きなことを<br />
                  追求しております。
                </p>
              </div>
              <div class="introduction__text2">
                <div class="my-name__text">
                  <h2>宇佐美 洋平</h2>

                  <p>
                    1985年 1月19日生まれ<br />
                    名古屋市在住 O型
                  </p>
                  <p>
                    パティシエ歴 21年<br />
                    好きなことは何でも<br />
                    チャレンジ
                  </p>
                </div>
                <div class="my-programming-word">
                  <h2>プログラミング言語</h2>
                  <ul class="word-items">
                    <li class="word-item">HTML</li>
                    <li class="word-item">CSS・Sass</li>
                    <li class="word-item">jQuery</li>
                    <li class="word-item">JavaScript</li>
                    <li class="word-item">Word press</li>
                    <li class="word-item">React、Next.js学習中</li>
                  </ul>
                </div>
              </div>
            </div>

            <a
              class="read-more__button"
              href="<?php echo esc_url(home_url("/#contact")); ?>"
              target="_blank"
            >
              <span>Contact</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- <div class="about">
    <h2 class="about__title">カスタムフィールド</h2>
    <div class="about__card">
    <?php
// 1.フィールド名「custom-img」のデータを取得
$image = get_field("custom-img");

// 2.$imageのデータから画像のURLを変数化
$url = $image["url"];

// 3.$imageのデータから画像のalt属性を変数化
$alt = $image["alt"];
?>

<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="about__img">
    <div class="about__body">
            <p class="about__title"><?php the_field("custom-text"); ?></p>
            <p class="about__textarea"><?php the_field("custom-textarea"); ?>
            </p>
            <a href="<?php echo esc_url(get_field("custom-url")); ?>" class="about__link">詳細はこちら</a>
        </div>
    </div>
</div>
    <div class="scroll-fixed">
      <div class="loop__wrap">
        <div class="loop__wrap--first">
          Web Designer &nbsp;Programmer &nbsp;Dessert Creator &nbsp;
        </div>
        <div class="loop__wrap--second">
          Web Designer &nbsp;Programmer &nbsp;Dessert Creator &nbsp;
        </div>
      </div>
    </div> -->


    <?php get_footer(); ?>