<?php get_header(); ?>
 

    <main>
      <!-- mv -->
      <section class="kv wrapper">
        <div class="kv__content">
          <div class="main-img"></div>
          <div class="main-img"></div>
          <div class="main-img"></div>
          <div class="main-img"></div>
          <div class="main-img"></div>
          <div class="kv__title-img">
          <img
            class="logo-img fade-in fade-in-up"
            src="<?php echo esc_url(get_theme_file_uri("/img/Creating the Only One.svg")); ?>"
            alt=""
          />
          </div>
        </div>
        <span class="kv__scroll">scroll</span>
      </section>

      <!-- about -->
      <section class="about scroll-point" id="about">
        <div class="about__inner inner" id="fadeElement">
          <div class="about__title section-title">
            <span class="section-title__main">About</span>
            <h2 class="section-title__sub">自己紹介</h2>
          </div>
          <div class="about__wrap fade-in fade-in-up">
            <div class="about__text">
              <p>
                はじめまして、宇佐美洋平と申します。<br />
                名古屋でデザートコースのお店を経営している<br />
                オーナーシェフパティシエです。
              </p>
              <p>
                作ることが好きでパティシエをしていますが、<br />
                他にプログラミングでのWeb制作も好きで<br />
                日々の学習に勤しんでおります。
              </p>
              <p>
                年間2000人に対応した接客術や<br />
                クオリティーの高い制作物、<br />
                細部まで突き詰める能力を<br />
                Web制作にも活かしていきます。
              </p>
              <p class="about__policy">即行動・傾聴力・追求心</p>
              <p>の三箇条が信念です。</p>
            </div>
            <img src="<?php echo esc_url(get_theme_file_uri("/img/my-photo.jpg")); ?>" alt="本人の写真" loading="lazy" />
          </div>
          <a class="read-more__button" href="<?php echo esc_url(home_url("/about")); ?>">
            <span>Read More</span>
          </a>
        </div>

        
      </section>

      <!-- <article> -->
      <div class="scroll-fixed">
        <div class="loop__wrap">
          <div class="loop__wrap--first">
            Web Designer &nbsp;Programmer &nbsp;Dessert Creator &nbsp;
          </div>
          <div class="loop__wrap--second">
            Web Designer &nbsp;Programmer &nbsp;Dessert Creator &nbsp;
          </div>
        </div>
      </div>

    <!-- service -->
    <section class="service scroll-point" id="service">
        <div class="service__inner inner">
          <div class="service__title section-title">
            <span class="section-title__main">Service</span>
            <h2 class="section-title__sub">事業内容</h2>
          </div>
          <ul class="service__items">
            <div class="website-service">
              <h3 class="service-title__main-second section-title">
                website service
              </h3>
              <ul class="service__items--web">
                <li class="service__item fade-in fade-in-up">
                  <div class="hover-border"></div>
                  <a
                    href="<?php echo esc_url(home_url('/s_website')); ?>"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">Webサイト制作</h4>
                    <div class="service__item-img" href="">
                      <img
                        src="<?php echo esc_url(get_theme_file_uri('./img/website1.png')); ?>"
                        alt="Webサイト制作アイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      新規サイトの制作はもちろん、レスポンシブコーディングやアニメーションなど動きのあるサイト制作も可能です。
                    </p>
                  </a>
                </li>
                <li class="service__item fade-in fade-in-up">
                  <a
                    href="<?php echo esc_url(home_url('/s_design')); ?>"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">Webデザイン</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo esc_url(get_theme_file_uri('./img/design.png')); ?>"
                        alt="Webデザインアイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      クライアント様のイメージを詳しくヒアリングしてブランドイメージに沿ったデザインを作っていきます。<br class="pc-show" />
                      ロゴ制作も承ります。
                    </p>
                  </a>
                </li>
                <li class="service__item fade-in fade-in-up">
                  <a
                    href="<?php echo esc_url(home_url('/s_renewal')); ?>"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">Webサイトリニューアル</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo esc_url(get_theme_file_uri('./img/siterenewal.png')); ?>"
                        alt="Webサイトリニューアルアイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      現状のWebサイトの改良や修正なども可能です。アニメーションや動画の追加、デザインもお気軽にご相談ください。
                    </p>
                  </a>
                </li>
              </ul>
            </div>

            <div class="creator-service">
              <h3 class="service-title__main-second creator section-title">
                creator service
              </h3>
              <ul class="service__items--creator">
                <li class="service__item fade-in fade-in-up">
                  <a
                    href="<?php echo esc_url(home_url('/s_consultant')); ?>"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">飲食店コンサルタント</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo esc_url(get_theme_file_uri('./img/consulting.png')); ?>"
                        alt="飲食店コンサルタントアイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      飲食店、パティシエの経験を活かしコンサルタントを行っております。<br>
                      ケーキ屋、カフェ、デザート屋などお気軽にご相談ください。
                    </p>
                  </a>
                </li>
                <li class="service__item fade-in fade-in-up">
                  <a
                    href="<?php echo esc_url(home_url('/s_recipe')); ?>"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">レシピ開発</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo esc_url(get_theme_file_uri('./img/cake.png')); ?>"
                        alt="レシピ開発アイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      ２０年分のレシピや新作の考え方を活かしてレシピ１品から承ります。<br
                        class="pc-show"
                      />
                      栄養学も学習中で体に良いものも考案できます。
                    </p>
                  </a>
                </li>
                <li class="service__item fade-in fade-in-up">
                  <a
                    href="<?php echo esc_url(home_url('/s_photo')); ?>"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">写真・動画撮影</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo esc_url(get_theme_file_uri('./img/camera.png')); ?>"
                        alt="写真・動画撮影アイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      写真、動画撮影も承ります。<br
                        class="pc-show"
                      />
                      ポートフォリオの写真は<br
                        class="pc-show lg-none"
                      />自分が撮影しました。
                    </p>
                  </a>
                </li>
              </ul>
            </div>
          </ul>
        </div>
      </section>


      <!-- </article> -->

      <!-- news -->
      <!-- news -->
      <section id="news" class="news scroll-point">
        <div class="news__inner inner">
          <div class="news__title section-title">
            <span>News</span>
            <h2>お知らせ</h2>
          </div>
          <?php
$args = array(
    "post_type" => "post",
    "posts_per_page" => 3
);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) : ?>
          <ul class="news__items">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
         
            <div class="news__items-wrap fade-in fade-in-up">
            <?php if (has_post_thumbnail()) : ?>
				                <!-- 記事のアイキャッチ画像があればその画像を出力 -->
				                <?php the_post_thumbnail('full', array('class' => 'news__img')); ?>
				            <?php else : ?>
				                <!-- 記事のアイキャッチ画像がなければNoImage画像を出力 -->
				                <img class="news__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
				            <?php endif; ?>
              
              <li class="news__item news-item fade-in fade-in-up">
                <time class="news-item__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"
                  ><?php echo get_the_date('Y.m.d'); ?></time
                >
                <a href="<?php the_permalink(); ?>" class="news-item__title"
                  ><?php the_title(); ?></a
                >
              </li>
            </div>
            <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
          </ul>
          <?php else : ?>
    <p>記事が投稿されていません</p>
<?php endif; ?>
        </div>
        <a class="read-more__button" href="<?php echo esc_url(home_url("/news")); ?>">
          <span>Read More</span>
        </a>
      </section>

      <!-- works -->
      <section class="works scroll-point" id="works">
        <div class="works__title section-title">
          <span class="section-title__main">Works</span>
          <h2 class="section-title__sub">制作実績</h2>
        </div>
        <div class="works__inner inner">
                  <?php
          $args = array(
              "post_type" => "works",
              "posts_per_page" => 9
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <ul class="works__list js-fadeIn">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="fade-in fade-in-up works-item">
            <a href="<?php the_permalink(); ?>" class="detail__link">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('full', array('class' => 'detail__img')); ?>
                      <?php else : ?>
                          <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                      <?php endif; ?>  
                           <div class="detail__text">
                                <h3 class="detail__summary"><?php the_title(); ?></h3>
                                <time class="detail__day" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time>
                            </div>
                        </a>
            </li>
            <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
<?php else : ?>
    <p>記事が投稿されていません</p>
<?php endif; ?>
          </ul>
        </div>
        <a class="read-more__button" href="<?php echo esc_url(home_url("/works")); ?>">
          <span>Gallery page</span>
        </a>
      </section>
     
      <!-- contact -->
      <section class="contact scroll-point" id="contact">
        <div class="contact__inner inner">
          <div class="contact__wrap">
            <div class="contact__title section-title">
              <span class="section-title__main">Contact</span>
              <h2 class="section-title__sub">お問い合わせ</h2>
            </div>
            <p class="contact__text">
              お気軽にご相談ください。<br />
              基本的に即レス対応、遅くても<br />
              当日中に返信させて頂きます。
            </p>
            <p class="contact__text">
              稼働時間<br />
              朝8時〜17時
            </p>
          </div>
          
          <!-- <form action="mail.php" method="post" class="contact__form">
            <div class="contact__item">
              <div class="contact__label">
                <label for="name" class="contact__label-text"
                  >お名前<sup>*</sup></label
                >
              </div>
              <input
                type="text"
                id="name"
                class="contact__input"
                placeholder="山田 太郎"
                required
              />
            </div>
            <div class="contact__item">
              <div class="contact__label">
                <label for="mail" class="contact__label-text">
                  メールアドレス<sup>*</sup></label
                >
              </div>
              <input
                type="email"
                id="mail"
                name="メールアドレス"
                class="contact__input"
                placeholder="○○@info.com"
                required
              />
            </div>
            <div class="contact__item">
              <div class="contact__label">
                <label for="type" class="contact__label-text"
                  >ご相談の種類</label
                >
              </div>
              <div class="contact__select-wrap">
                <select class="contact__select" id="type" required>
                  <option value="">選択してください</option>
                  <option value="Web制作">Webサイト制作</option>
                  <option value="Webデザイン">Webデザイン</option>
                  <option value="Web相談">Web相談</option>
                  <option value="飲食業コンサル">飲食業コンサル</option>
                  <option value="お菓子について">お菓子について</option>
                  <option value="写真撮影">写真撮影</option>
                  <option value="その他">その他</option>
                </select>
              </div>
            </div>
            <div class="contact__item">
              <div class="contact__label">
                <label for="contents" class="contact__label-text"
                  >ご相談内容</label
                >
              </div>
              <textarea
                class="contact__textarea"
                id="contents"
                placeholder="ご自由にお書きください"
                required
              ></textarea>
            </div>

            <button class="read-more__button" src="<?php echo esc_url(home_url()); ?>" type="submit">
              <span>送信する</span>
            </button>
          </form> -->
        </div>
        <div>
          <a class="read-more__button" href="<?php echo esc_url(home_url("/contact")); ?>">
            <span>Contact page</span>
          </a>
          </div>
      </section>
    </main>

    <?php get_footer(); ?>