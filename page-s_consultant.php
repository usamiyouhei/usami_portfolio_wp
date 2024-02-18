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
        <div class="fv-img__consultant">
        <!-- <img src="./img/web-site-service-img.jpg" alt="" class="fv-img"> -->
        <h2 class="page-title__consultant">Consultant service</h2>
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
          <img src="<?php echo esc_url(get_theme_file_uri("./img/Dg-img5.jpg")); ?>" alt="" width="500" height="233" />
        </div>
        <div class="test-slick__item">
          <img
            src="<?php echo esc_url(get_theme_file_uri("./img/dg-img6.jpg")); ?>"
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
          

          <ul class="service-items">
            <li class="service-item">
              <div class="summary">
                <h3 class="service-title summary">サービス概要</h3>
                <p class="summary-text fade-in fade-in-up">
                  飲食店２２年の経験を活かし、<br
                    class="md-show"
                  />飲食店の開店からメニュー開発など<br
                    class="md-show"
                  /><br class="md-none">細かいところまでお手伝いいたします。<br
                    class="md-show lg-show "
                  />サービス内容は下記の表にて記載ございます。
                </p>
              </div>
            </li>
            <li class="service-item">
              <div class="track-record">
                <h3 class="service-title track-record">サービス実績</h3>
                <p class="track-record-text  fade-in fade-in-up">
                 
                    </p>
              </div>
            </li>
            <li class="service-item">
              <div class="price">
                <h3 class="service-title price">制作料金目安</h3>
                <p class="price-text  fade-in fade-in-up">
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
                        <h4>目的<br />料金目安</h4>
                      </th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <h4>
                          アドバイス<br />
                          メニュー提案など
                        </h4>
                        <p class="pricechart_item__price">
                          費用<br />
                          <span></span>
                          月額&emsp;１５万円程
                        </p>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <h4>
                          ライト<br />
                          ＋<br />
                          教育・その他管理
                        </h4>
                        <p class="pricechart_item__price">
                          費用<br />
                          <span></span>
                          月額&emsp;２５万円程
                        </p>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <h4>
                          スタンダード<br />
                          ＋<br />
                          集客目的の<br />
                          サイト制作、運用
                        </h4>
                        <p class="pricechart_item__price">
                          費用<br />
                          <span></span>
                          月額&emsp;４０万円程
                        </p>
                      </td>
                    </tr>

                    <tr class="pricechart_item">
                      <th class="pricechart_item__title">対応</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                       電話・メール・チャット
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        電話・メール・チャット・現場
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        電話・メール・チャット・現場
                      </td>
                    </tr>

                    <!-- <tr class="pricechart_item">
                      <th class="pricechart_item__title">管理</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <span class="font_large"></span>
                        <br />
                       
                        <br />
                        <span class="font_small"></span>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <span class="font_large">◎</span>
                        <br />
                        更新機能3件
                        <br />
                        <span class="font_small"
                          >（お知らせやブログ、商品など）</span
                        >
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        <span class="font_large">◎</span>
                        <br />
                        更新機能4件
                        <br />
                        <span class="font_small"
                          >（お知らせやブログ、商品など）</span
                        >
                      </td>
                    </tr>
                    <tr class="pricechart_item">
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
                    </tr>

                    <tr class="pricechart_item">
                      <th
                        class="pricechart_item__title pricechart_item__radius03"
                      >
                        スマホ・タブレット<br />対応
                      </th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <span class="font_large">△</span>
                        <br />
                        スマホ対応
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <span class="font_large">◎</span>
                        <br />
                        スマホ・タブレット対応
                      </td>

                      <td
                        class="pricechart_item__text pricechart_item__text03 pricechart_item__radius04"
                      >
                        <span class="font_large">◎</span>
                        <br />
                        スマホ・タブレット対応
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

      
      <a class="read-more__button" href="<?php echo esc_url(home_url("/contact")); ?>" target="_blank">
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