<?php get_header(); ?>

<main>
<?php if (function_exists('bcn_display')) { ?>
            <div class="about__breadcrumb">
                <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                    <?php bcn_display(); ?>
                </div>
            </div>
        <?php } ?> 
      <section class="section-title" id="gallery">
        <div class="section-title__inner inner">
          <div class="fv__head">
            <h2 class="page-title--dessert fade-in fade-in-up">
              Dessert Gallery
            </h2>
          </div>
          <div class="test-slick js-slick01 fade-in fade-in-up">
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img1.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img
                src="<?php echo esc_url(get_theme_file_uri("./img/dg-img2 (1).jpg")); ?>"
                alt=""
                width="500"
                height="233"
              />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img3.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img4.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img5 .jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img
                src="<?php echo esc_url(get_theme_file_uri("./img/dg-img6 (1).jpg")); ?>"
                alt=""
                width="500"
                height="233"
              />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img7.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img8.jpg")); ?>" alt="" width="500" height="233" />
            </div>
          </div>
          <div class="test-slick js-slick02 fade-in fade-in-up" dir="rtl">
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img9.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img10.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img11.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img12.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/dg-img13.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/dg-img14.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/dg-img15.jpg")); ?>" alt="" width="500" height="233" />
            </div>
            <div class="test-slick__item">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/dg-img16.jpg")); ?>" alt="" width="500" height="233" />
            </div>
          </div>
        </div>
      </section>

      <section class="modal-section">
        <div class="modal__gallery fade">
          <div class="inner">
            <div class="list">
              <div data-modal="modalOne">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/dg-img17.jpg")); ?>"
                  alt="和梨のデザート"
                  loading="lazy"
                />
                <p>和梨のデザート</p>
              </div>
              <div data-modal="modalTwo">
                <img src="<?php echo esc_url(get_theme_file_uri("./img/dg-img11.jpg")); ?>" alt="桜パフェ" loading="lazy" />
                <p>桜パフェ</p>
              </div>
              <div data-modal="modalThree">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/dg-img19.jpg")); ?>"
                  alt="シャインマスカットのデザート"
                  loading="lazy"
                />
                <p>シャインマスカットのデザート</p>
              </div>
              <div data-modal="modalFour">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/kv-img1.jpg")); ?>"
                  alt="パリブレスト"
                  loading="lazy"
                />
                <p>パリブレスト</p>
              </div>
              <div data-modal="modalFive">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/works8.jpg")); ?>"
                  alt="フルーツタルト"
                  loading="lazy"
                />
                <p>フルーツタルト</p>
              </div>
              <div data-modal="modalSix">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/mv-dessert.jpg")); ?>"
                  alt="レモンのデザート"
                  loading="lazy"
                />
                <p>レモンのデザート</p>
              </div>
            </div>
          </div>
          <!-- modalOne -->
          <div id="modalOne" class="modal close">
            <div class="modal-bg">
              <div class="modal-content">
                <div>
                  <div class="modal-btn close">
                    <div>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri("./img/dg-img17.jpg")); ?>"
                    alt="和梨のデザート"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalTwo -->
          <div id="modalTwo" class="modal close">
            <div class="modal-bg">
              <div class="modal-content">
                <div>
                  <div class="modal-btn close">
                    <div>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri("./img/dg-img11.jpg")); ?>"
                    alt="桜パフェ"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalThree -->
          <div id="modalThree" class="modal close">
            <div class="modal-bg">
              <div class="modal-content">
                <div>
                  <div class="modal-btn close">
                    <div>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri("./img/dg-img19.jpg")); ?>"
                    alt="シャインマスカットのデザート"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalFour -->
          <div id="modalFour" class="modal close">
            <div class="modal-bg">
              <div class="modal-content">
                <div>
                  <div class="modal-btn close">
                    <div>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri("./img/kv-img1.jpg")); ?>"
                    alt="パリブレスト"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalFive -->
          <div id="modalFive" class="modal close">
            <div class="modal-bg">
              <div class="modal-content">
                <div>
                  <div class="modal-btn close">
                    <div>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri("./img/works8.jpg")); ?>"
                    alt="フルーツタルト"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalSix -->
          <div id="modalSix" class="modal close">
            <div class="modal-bg">
              <div class="modal-content">
                <div>
                  <div class="modal-btn close">
                    <div>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri("./img/mv-dessert.jpg")); ?>"
                    alt="レモンのデザート"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="introduce">
        <div class="introduce__inner inner  fade-in fade-in-up">
          <img src="<?php echo esc_url(get_theme_file_uri("./img/shop-img1.jpg")); ?>" alt="" class="introduce__shop-img" />
          <div class="introduce__wrap">
            <h3 class="my-shop__title">
              店名&emsp;Dessert&nbsp;une&nbsp;assiette
            </h3>
            <p class="my-shop__title--sub">2019年7月17日名古屋にて開業</p>
            <h4 class="my-shop__title--policy">
              『１皿に魂込めて』<br>
              『唯一無二のデザート』
            </h4>
            <p class="my-shop__text">
              を信念にしております。<br />
              四季折々の旬の食材を活かして<br class="md-show">コース仕立てで<br />
              デザートが楽しめます。<br />
              カウンター６席のみの<br class="md-show">ライブキッチンなので<br />
              作っている様子や出来立ての<br class="md-show">
              デザートが楽しめます。
            </p>
            <a
              href="<?php echo esc_url(home_url('https://dessert-une-assiette.com/')); ?>"
              class="shop__link read-more__button"
              target="_blank"
              rel="noreferrer"
            >Dessert une Assiette Link</a>
            <div class="introduce__shop-img--container">
              <img
                src="<?php echo esc_url(get_theme_file_uri("./img/shop-img2.jpg")); ?>"
                alt=""
                class="introduce__shop-img"
              />
              <img
                src="<?php echo esc_url(get_theme_file_uri("./img/shop-img3.jpg")); ?>"
                alt=""
                class="introduce__shop-img"
              />
            </div>
          </div>
        </div>
        <div class="my-shop__map ">
          <div class="my-shop__map--inner inner  fade-in fade-in-up">
            <iframe
              src="<?php echo esc_url(home_url('')); ?>https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13046.119647942525!2d136.93589691822797!3d35.16834280688094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003713dd6d4be2d%3A0x5db8554ad3683538!2z44OH44K744O844OrIOOCouODsyDjgqLjgrfjgqfjg4Pjg4g!5e0!3m2!1sja!2sjp!4v1705053818316!5m2!1sja!2sjp"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>

      <a class="read-more__button" href="<?php echo esc_url(home_url("/contact")); ?>" target="_blank">
        <span>Contact</span>
      </a>
        </main>

    <?php get_footer(); ?>