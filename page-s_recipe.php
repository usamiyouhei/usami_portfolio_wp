<?php get_header(); ?>

<main>
<?php if (function_exists('bcn_display')) { ?>
            <div class="about__breadcrumb">
                <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                    <?php bcn_display(); ?>
                </div>
            </div>
        <?php } ?>
      <section class="website-service" id="gallery">
        <div class="fv-img__recipe">
        <!-- <img src="./img/web-site-service-img.jpg" alt="" class="fv-img"> -->
        <h2 class="page-title__recipe">Recipe service</h2>
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
        <div class="website-service__inner inner">
          

          <ul class="service-items ">
            <li class="service-item">
              <div class="summary">
                <h3 class="service-title summary">サービス概要</h3>
                <p class="summary-text fade-in fade-in-up">
                  新規レシピの制作はもちろん、<br
                    class="md-show"
                  />レシピの改善や料理、和菓子など<br
                    class="md-show"
                  /><br class="md-none">様々なレシピのご相談を<br
                    class="md-show"
                  />承ります。
                </p>
              </div>
            </li>
            <li class="service-item">
              <div class="track-record">
                <h3 class="service-title track-record">サービス実績</h3>
                <p class="track-record-text fade-in fade-in-up">
                 自店&emsp;<a
                 href="<?php echo esc_url(home_url('https://dessert-une-assiette.com/')); ?>"
                 class="shop__link"
                 target="_blank"
                 rel="noreferrer"
                 >Dessert une Assiette </a
               >にて<br class="sp-show">様々なレシピを考案し<br class="md-show">お客様に提供しております。

                    </p>
              </div>
            </li>
            <li class="service-item">
              <div class="price">
                <h3 class="service-title price">制作料金目安</h3>
                <p class="price-text fade-in fade-in-up">
                  目安ですので、予算なども踏まえて<br class="md-show">お気軽にご相談ください。<br>
                  
                </p>
              </div>

              <div class="pricechart_wrap scroll-container">
                <table class="pricechart_list">
                  <tbody>
                    <tr class="pricechart_item">
                      <th
                        class="pricechart_item__title pricechart_item__title01"
                      >
                      <span class="md-show">スクロールできます→</span>
                      </th>
                      <th
                        class="pricechart_item__title pricechart_item__title02 pricechart_item__radius01"
                      >
                        <h4>ライト</h4>
                      </th>
                      <th
                        class="pricechart_item__title pricechart_item__title03"
                      >
                        <h4>スタンダード</h4>
                      </th>
                      <th
                        class="pricechart_item__title pricechart_item__title04 pricechart_item__radius02"
                      >
                        <h4>プレミアム</h4>
                      </th>
                    </tr>

                    <tr class="pricechart_item">
                      <th
                        class="pricechart_item__title pricechart_item__radius01"
                      >
                        <h4>目的<br />料金目安<br />開発材料費込み</h4>
                      </th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <h4>
                          １レシピ<br />
                          
                        </h4>
                        <p class="pricechart_item__price">
                          費用<br />
                          <span></span>
                          ３万円
                        </p>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <h4>
                          ３レシピ<br />
                          
                        </h4>
                        <p class="pricechart_item__price">
                          費用<br />
                          <span></span>
                          ５万円
                        </p>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <h4>
                          ５レシピ<br />
                          
                        </h4>
                        <p class="pricechart_item__price">
                          費用<br />
                          <span></span>
                          ８万円程
                        </p>
                      </td>
                    </tr>

                    <tr class="pricechart_item">
                      <th class="pricechart_item__title">パーツ数</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <p>1レシピ</p>
                        6パーツほど
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <p>1レシピ</p>
                        ８パーツほど
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        <p>1レシピ</p>
                        １０パーツほど
                      </td>
                    </tr>

                    <tr class="pricechart_item">
                      <th class="pricechart_item__title">フィードバック</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <span class="font_large">△</span>
                        <br />
                        １回
                        <br />
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <span class="font_large">◎</span>
                        <br />
                        ２回
                        <br />
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        <span class="font_large">◎</span>
                        <br />
                        ２回
                        <br />
                      </td>
                    </tr>
                    <tr class="pricechart_item">
                      <th class="pricechart_item__title">技術レクチャー</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <span class="font_large">△</span>
                        <br />
                        １回
                        <br />
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <span class="font_large">◎</span>
                        <br />
                        ２回
                        <br />
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        <span class="font_large">◎</span>
                        <br />
                        ３回
                        <br />
                      </td>
                    </tr>

                    <!-- <tr class="pricechart_item">
                      <th class="pricechart_item__title">原稿</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        お客様にてご用意
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        取材・作成代行
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        取材・作成代行
                      </td>
                    </tr>
                    <tr class="pricechart_item">
                      <th class="pricechart_item__title">デザイン案</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        1案まで
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        2案
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        2案
                      </td>
                    </tr> -->

                    
                  </tbody>
                </table>
              </div>
            </li>
            <li class="service-item">
            <p>プロのzoom相談&emsp;1h〜2,000円（税込）<br class="sp-show">も承ります。</p>
          </li>
          </ul>
        </div>
      </section>

      <section class="section-title" id="gallery">
        
          
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

      
      <a class="read-more__button" href="<?php echo esc_url(home_url("/contact")); ?>" ">
        <span>Contact</span>
      </a>
    

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
     </main>
    <?php get_footer(); ?>