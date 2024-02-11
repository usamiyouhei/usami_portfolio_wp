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
          <img
            class="kv__title-img fade-in fade-in-up"
            src="<?php echo get_template_directory_uri(); ?>/img/Creating the Only One.svg"
            alt=""
          />
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/my-photo.jpg" alt="本人の写真" loading="lazy" />
          </div>
          <a class="read-more__button" href="<?php echo get_template_directory_uri(); ?>/about.html">
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
                  <a
                    href="<?php echo get_template_directory_uri(); ?>/service_html/service_web.html"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">Webサイト制作</h4>
                    <div class="service__item-img" href="">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/website1.png"
                        alt="Webサイト制作アイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      新規サイトの制作はもちろん、<br class="pc-show" />
                      レスポンシブコーディングや<br class="pc-show" />
                      アニメーションなど<br class="lg-show" />動きのある<br
                        class="pc-show"
                      />
                      サイト制作も可能です。
                    </p>
                  </a>
                </li>
                <li class="service__item fade-in fade-in-up">
                  <a
                    href="<?php echo get_template_directory_uri(); ?>/service_html/service_design.html"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">Webデザイン</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/design.png"
                        alt="Webデザインアイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      クライアント様のイメージを<br class="pc-show" />
                      詳しくヒアリングして<br class="pc-show" />
                      ブランドイメージに沿った<br class="pc-show" />
                      デザインを作っていきます。<br class="pc-show" />
                      ロゴ制作も承ります。
                    </p>
                  </a>
                </li>
                <li class="service__item fade-in fade-in-up">
                  <a
                    href="<?php echo get_template_directory_uri(); ?>/service_html/service_renewal.html"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">Webサイトリニューアル</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/siterenewal.png"
                        alt="Webサイトリニューアルアイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      現状のWebサイトの改良や<br class="pc-show" />
                      修正なども可能です。<br class="pc-show" />
                      アニメーションや<br class="lg-show" />動画の追加、<br
                        class="pc-show"
                      />
                      デザインもお気軽に<br class="pc-show" />
                      ご相談ください。
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
                    href="<?php echo get_template_directory_uri(); ?>/service_html/service_consultant.html"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">飲食店コンサルタント</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/consulting.png"
                        alt="飲食店コンサルタントアイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      飲食店、パティシエの<br class="lg-show" />経験を活かし<br
                        class="pc-show"
                      />
                      コンサルタントを<br class="lg-show" />行っております。<br
                        class="pc-show"
                      />
                      ケーキ屋、カフェ、<br class="lg-show" />デザート屋など<br
                        class="pc-show"
                      />
                      お気軽にご相談ください。
                    </p>
                  </a>
                </li>
                <li class="service__item fade-in fade-in-up">
                  <a
                    href="<?php echo get_template_directory_uri(); ?>/service_html/service_recipe.html"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">レシピ開発</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/cake.png"
                        alt="レシピ開発アイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      ２０年分のレシピや<br class="lg-show" />新作の考え方を<br
                        class="pc-show"
                      />
                      活かしてレシピ１品<br class="lg-show" />から承ります。<br
                        class="pc-show"
                      />
                      栄養学も学習中で<br class="lg-show" />体に良いものも<br
                        class="pc-show"
                      />
                      考案できます。
                    </p>
                  </a>
                </li>
                <li class="service__item fade-in fade-in-up">
                  <a
                    href="<?php echo get_template_directory_uri(); ?>/service_html/service_photo.html"
                    class="service__item--link"
                  >
                    <h4 class="service__item-title">写真・動画撮影</h4>
                    <div class="service__item-img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/img/camera.png"
                        alt="写真・動画撮影アイコン"
                        loading="lazy"
                      />
                    </div>
                    <p class="service__item-text">
                      写真、動画撮影も<br class="lg-show" />承ります。<br
                        class="pc-show"
                      />
                      ポートフォリオの<br class="lg-show" />写真は<br
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
          <ul class="news__items">
          <?php if(have_posts()): while(have_posts()) : the_post(); ?>
            <div class="news__items-wrap fade-in fade-in-up">
              <img
                src="<?php echo get_template_directory_uri(); ?>/img/news-img2.jpg"
                alt="ポートフォリオサイトの画像"
                class="news__img"
                loading="lazy"
              />
              <li class="news__item news-item fade-in fade-in-up">
                <time class="news-item__date" datetime="2023-12-29"
                  >2024.1.19</time
                >
                <a href="<?php the_permalink(); ?>/news.html" class="news-item__title"
                  ><?php the_title()?></a
                >
                <p><?php the_excerpt(); ?></p>
              </li>
            </div>
            <?php endwhile; ?>
    <?php else : ?>
      <p>記事がありません</p>
    <?php endif; ?>
          </ul>
        </div>
        <a class="read-more__button" href="<?php echo get_template_directory_uri(); ?>/news.html">
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
          <ul class="works__list js-fadeIn">
            <li class="fade-in fade-in-up works-item">
              <a href="<?php echo get_template_directory_uri(); ?>/works_html/works_pondesign.html"
                ><div>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/works1.jpg"
                    alt="Webサイト制作"
                    loading="lazy"
                  />
                </div>
                <h3>Web制作</h3></a
              >
            </li>
            <li class="fade-in fade-in-up works-item">
              <a href="<?php echo get_template_directory_uri(); ?>/works_html/works_shoes.html"
                ><div>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/works2.jpg"
                    alt="靴屋さんWebサイト制作"
                    loading="lazy"
                  />
                </div>
                <h3>Web制作</h3></a
              >
            </li>
            <li class="fade-in fade-in-up works-item">
              <a href="<?php echo get_template_directory_uri(); ?>/works_html/works_green.html"
                ><div>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/works3.jpg"
                    alt="オーガニック野菜のWebサイト制作"
                    loading="lazy"
                  />
                </div>
                <h3>Web制作</h3></a
              >
            </li>
            <li class="fade-in fade-in-up works-item">
              <a href="<?php echo get_template_directory_uri(); ?>/works_html/works_clothes.html"
                ><div>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/works4.jpg"
                    alt="アパレルのWebサイト制作"
                    loading="lazy"
                  />
                </div>
                <h3>Web制作</h3></a
              >
            </li>
            <li class="fade-in fade-in-up works-item">
              <a href="<?php echo get_template_directory_uri(); ?>/works_html/works_camp.html"
                ><div>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/works5.jpg"
                    alt="個人ブログのWebサイト制作"
                    loading="lazy"
                  />
                </div>
                <h3>Web制作</h3></a
              >
            </li>
            <li class="fade-in fade-in-up works-item">
              <a href="<?php echo get_template_directory_uri(); ?>/works_html/works_web-design.html"
                ><div>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/works6.jpg"
                    alt="Webサイトデザイン"
                    loading="lazy"
                  />
                </div>
                <h3>Webサイトデザイン</h3></a
              >
            </li>
            <li class="fade-in fade-in-up works-item">
              <a href="<?php echo get_template_directory_uri(); ?>/works_html/creator.html"
                ><div>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/works7.jpg"
                    alt="デザート作成画像"
                    loading="lazy"
                  />
                </div>
                <h3>
                  デザートクリエイター<br />
                  写真・動画
                </h3></a
              >
            </li>
            <li class="fade-in fade-in-up works-item">
              <a href="<?php echo get_template_directory_uri(); ?>/works_html/dessert.html"
                ><div>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/works8.jpg"
                    alt="オーダーメイドケーキ画像"
                    loading="lazy"
                  />
                </div>
                <h3>
                  デザート・ケーキ<br />
                  お菓子製作
                </h3></a
              >
            </li>
            <li class="fade-in fade-in-up works-item">
              <a href="<?php echo get_template_directory_uri(); ?>/works_html/hobby.html"
                ><div>
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/works9.jpg"
                    alt="紫陽花の写真"
                    loading="lazy"
                  />
                </div>
                <h3>趣味・写真撮影</h3></a
              >
            </li>
          </ul>
        </div>
        <a class="read-more__button" href="<?php echo get_template_directory_uri(); ?>/works_html/dessert.html">
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
          <form action="mail.php" method="post" class="contact__form">
            <div class="contact__item">
              <div class="contact__label">
                <label for="name" class="contact__label-text"
                  >お名前<sup>*</sup></label
                >
                <!-- <span class="contact__required">必須</span> -->
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
                <!-- <span class="contact__required">必須</span> -->
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
                <!-- <span class="contact__required">必須</span> -->
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
                <!-- <span class="contact__required">必須</span> -->
              </div>
              <textarea
                class="contact__textarea"
                id="contents"
                placeholder="ご自由にお書きください"
                required
              ></textarea>
            </div>

            <button class="read-more__button" src="<?php echo get_template_directory_uri(); ?>/thanks.html" type="submit">
              <span>送信する</span>
            </button>
          </form>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>