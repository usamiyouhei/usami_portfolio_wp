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
        <div class="fv-img__renewal">
          <!-- <img src="./img/web-site-service-img.jpg" alt="" class="fv-img"> -->
          <h2 class="page-title">Renewal service</h2>
        </div>
        <div class="website-service__inner inner">
          <ul class="service-items">
            <li class="service-item">
              <div class="summary">
                <h3 class="service-title summary">サービス概要</h3>
                <p class="summary-text fade-in fade-in-up">
                  現状のホームページの改善や<br
                    class="md-show"
                  />デザインからリニューアルなど<br class="md-show" /><br
                    class="md-none"
                  />幅広く対応いたします。<br
                    class="md-show"
                  />お困りごとの解決を共に探していきます。
                </p>
              </div>
            </li>
            <li class="service-item">
              <div class="track-record">
                <h3 class="service-title track-record">サービス実績</h3>
                <p class="track-record-text fade-in fade-in-up">
                  現在、サンプルサイトを製作中です。
                </p>
              </div>
            </li>
            <li class="service-item">
              <div class="price">
                <h3 class="service-title price">制作料金目安</h3>
                <p class="price-text fade-in fade-in-up">
                  目安ですので、予算なども踏まえて<br
                    class="md-show"
                  />お気軽にご相談ください。<br />
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
                        <h4>ページ数<br />料金目安</h4>
                      </th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <h4>１ページ</h4>
                        <p class="pricechart_item__price">
                          費用<br />
                          <span></span>
                          １万円〜<br />
                          <span class="font_small"
                          > ※内容によります</span
                        >
                         
                        </p>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <h4>
                          ３ページ
                        </h4>
                        <p class="pricechart_item__price">
                          費用<br />
                          <span></span>
                          ５万円〜<br />
                          <span class="font_small"
                          > ※内容によります</span
                        >
                        </p>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <h4>
                          ５ページ
                        </h4>
                        <p class="pricechart_item__price">
                          費用<br />
                          <span></span>
                          ８万円〜<br />
                          <span class="font_small"
                          > ※内容によります</span
                        >
                        </p>
                      </td>
                    </tr>
                    <tr class="pricechart_item">
                      <th class="pricechart_item__title">アニメーション</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <span class="font_large">△</span>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <span class="font_large">◎</span>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        <span class="font_large">◎</span>
                      </td>
                    </tr>

                    <tr class="pricechart_item">
                      <th class="pricechart_item__title">更新機能の追加</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <span class="font_large">△</span>
                        <br />
                        更新機能1件
                        <br />
                        <span class="font_small">（例：お知らせ）</span>
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
                      <th class="pricechart_item__title">修正</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        ２回まで
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        ３回
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        ４回
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
                    </tr>
                  </tbody>
                </table>
              </div>
            </li>
            <li class="service-item">
              <p>
                プロのzoom相談&emsp;1h〜2,000円（税込）<br
                  class="sp-show"
                />も承ります。<br>
                アニメーションなど機能の追加は<br class="sp-show">
                １件からでも承ります。
              </p>
            </li>
          </ul>
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