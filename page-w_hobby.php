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
            <h2 class="page-title--hobby">Hobby Gallery</h2>
          </div>
        </div>
        <div class="modal__gallery fade">
          <div class="inner">
            <div class="list">
              <div data-modal="modalOne">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img1.jpg")); ?>"
                  alt="月夜と桜の写真"
                  loading="lazy"
                />
                <p>月夜と桜</p>
              </div>
              <div data-modal="modalTwo">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img2.jpg")); ?>"
                  alt="紫陽花の写真"
                  loading="lazy"
                />
                <p>碧の紫陽花</p>
              </div>
              <div data-modal="modalThree">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img3.jpg")); ?>"
                  alt="曼珠沙華の写真"
                  loading="lazy"
                />
                <p>曼珠沙華</p>
              </div>
              <div data-modal="modalFour">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img4.jpg")); ?>"
                  alt="ジェノベーゼパスタの写真"
                  loading="lazy"
                />
                <p>ジェノベーゼパスタ</p>
              </div>
              <div data-modal="modalFive">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img5.jpg")); ?>"
                  alt="照り焼きチキンの写真"
                  loading="lazy"
                />
                <p>照り焼きチキン</p>
              </div>
              <div data-modal="modalSix">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img6.jpg")); ?>"
                  alt="赤ワインの写真"
                  loading="lazy"
                />
                <p>赤ワイン</p>
              </div>
              <div data-modal="modalSeven">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img7.jpg")); ?>"
                  alt="夏の日の晴天の写真"
                  loading="lazy"
                />
                <p>夏の日の晴天</p>
              </div>
              <div data-modal="modalEight">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img8.jpg")); ?>"
                  alt="夕暮れの写真"
                  loading="lazy"
                />
                <p>夕暮れ</p>
              </div>
              <div data-modal="modalNine">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img9.jpg")); ?>"
                  alt="観葉植物の写真"
                  loading="lazy"
                />
                <p>ガジュマル</p>
              </div>
              <div data-modal="modalTen">
                <img
                  src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img10.jpg")); ?>"
                  alt="観葉植物の写真"
                  loading="lazy"
                />
                <p>
                  シンニンギア<br />
                  オルモスト・シルバー
                </p>
              </div>
              <div data-modal="modalEleven">
                <img src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img11.jpg")); ?>" alt="器の写真" loading="lazy" />
                <p>作家様の器</p>
              </div>
              <div data-modal="modalTwelve">
                <img src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img12.jpg")); ?>" alt="器の写真" loading="lazy" />
                <p>硫化銀彩の器</p>
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img1.jpg")); ?>"
                    alt="月夜と桜の写真"
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
                    src="<?php echo esc_url(get_theme_file_uri("../img/Hg-img2.jpg")); ?>"
                    alt="紫陽花の写真"
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img3.jpg")); ?>"
                    alt="曼珠沙華の写真"
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img4.jpg")); ?>"
                    alt="ジェノベーゼパスタの写真"
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
                    src="<?php echo esc_url(get_theme_file_uri("../img/Hg-img5.jpg")); ?>"
                    alt="照り焼きチキンの写真"
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img6.jpg")); ?>"
                    alt="赤ワインの写真"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalSeven -->
          <div id="modalSeven" class="modal close">
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img7.jpg")); ?>"
                    alt="夏の日の晴天の写真"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalEight -->
          <div id="modalEight" class="modal close">
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img8.jpg")); ?>"
                    alt="夕暮れの写真"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!--modalNine -->
          <div id="modalNine" class="modal close">
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img9.jpg")); ?>"
                    alt="観葉植物の写真"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalTen -->
          <div id="modalTen" class="modal close">
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img10.jpg")); ?>"
                    alt="観葉植物の写真"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalEleven -->
          <div id="modalEleven" class="modal close">
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img11.jpg")); ?>"
                    alt="器の写真"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- modalTwelve -->
          <div id="modalTwelve" class="modal close">
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
                    src="<?php echo esc_url(get_theme_file_uri("./img/Hg-img12.jpg")); ?>"
                    alt="器の写真"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="my-hobby inner">
        <h3 class="my-hobby__title">趣味</h3>
        <div class="my-hobby__text">
          <p>
            趣味は多彩で、写真、料理、<br class="md-show">ワイン、花、観葉植物、陶器、運動など<br>
            物を作るのが好きなので<br class="md-show">クリエイター職は天職です。<br>
          </p>

          <p>
            今後はWeb制作で様々なwebサイトを<br class="md-show">作成しつつ、技量を高めながら<br>
            デザインや他のプログラミング言語を<br class="md-show">習得していきます。
          </p>
        </div>
      </section>

      <a class="read-more__button" href="<?php echo esc_url(home_url("/contact")); ?>" target="_blank">
        <span>Contact</span>
      </a>
       </main>

    <?php get_footer(); ?>