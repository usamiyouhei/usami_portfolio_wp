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
          <div class="fv__head fade-in fade-in-up">
            <h2 class="page-title--creator">Creator Gallery</h2>
          </div>

          <!-- kv-video -->
          <div class="kv fade-in fade-in-up">
            <video
              class="kv__video"
              src="<?php echo esc_url(get_theme_file_uri("./movie/dessert_une_assiette.mp4")); ?>"
              autoplay
              loop
              muted
            ></video>
            <div class="kv__video-wrap">
              <h3 class="kv__video-title">動画クリエイター&emsp;シライフウタ様&emsp;<br class="md-show pc-show">コラボ動画</h3>
                <time class="kv__video-time" datetime="2022-2-18">2022.2.18</time>
                
              <p class="kv__video-text">
               Instagram、ティックトックで人気の<br class="md-show">動画クリエイター<br class="md-none">
               シライフウタさんに<br class="md-show">撮影して頂きました&#33;<br class="md-show pc-show">
               流れるような動きでストーリー性のある<br class="md-show">動画に仕上がりました。
                 </p>
            </div>
          </div>
        </div>
      </section>

     

      <!-- Swiper -->
      <section class="swiper__sv inner fade-in fade-in-up">
        <h2 class="swiper-title">製作風景</h2>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/cg-img1.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Cg-img2.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Cg-img3.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/cg-img4.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/cg-img5.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/Cg-img6.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/cg-img7.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/cg-img8.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/cg-img9.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/cg-img10.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/cg-img11.jpg")); ?>" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri("./img/cg-img12.jpg")); ?>" alt="" />
            </div>
          </div>
          <!-- <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div> -->
          <div class="swiper-pagination"></div>
        </div>
        <div class="swiper__wrapper--bottom fade-in fade-in-up">
        <h3 class="swiper__title-sub">デザートクリエイター</h3>
        <p class="swiper__wrapper--text">
         自分にしかできない、<br class="sp-show">様々なデザートを<br class="md-show">考案しております。<br>
         Live感のあるパフォーマンスを<br class="md-show">楽しんで頂けるお店と<br class="sp-show">なっております。<br>
         コンサルタントやレシピ開発など<br class="md-show">お気軽にご相談ください。<br>
        </p>
      </div>
      </section>

      <section class="introduce">
        <div class="introduce__inner inner ">
          <img src="<?php echo esc_url(get_theme_file_uri("./img/shop-img1.jpg")); ?>" alt="" class="introduce__shop-img  fade-in fade-in-up" />
          <div class="introduce__wrap  fade-in fade-in-up">
            <h3 class="my-shop__title">
              店名&emsp;Dessert&nbsp;une&nbsp;assiette
            </h3>
            <p class="my-shop__title--sub">2019年7月17日名古屋にて開業</p>
            <h4 class="my-shop__title--policy">
              『１皿に魂込めて』<br>
              『唯一無二のデザート』
            </h4>
            <p class="my-hobby__text">
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
            <div class="introduce__shop-img--container  fade-in fade-in-up">
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
        <h4 class="my-shop__map  fade-in fade-in-up">
          <div class="my-shop__map--inner inner">
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
        </h4>
      </section>


      <a class="read-more__button" href="<?php echo esc_url(home_url("/contact")); ?>" target="_blank">
        <span>Contact</span>
      </a>
       </main>

    <?php get_footer(); ?>