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
        <div class="fv-img__design">
          <!-- <img src="./img/web-site-service-img.jpg" alt="" class="fv-img"> -->
          <h2 class="page-title__design">Web Design service</h2>
        </div>
        <div class="website-service__inner inner">
          <ul class="service-items fade-in fade-in-up">
            <li class="service-item">
              <div class="summary">
                <h3 class="service-title summary">サービス概要</h3>
                <p class="summary-text fade-in fade-in-up">
                  新規Webサイトのデザインカンプ、<br
                    class="sp-show"
                  />新規ロゴの作成など<br
                    class="md-show"
                  />クライアント様のイメージを詳しく<br class="md-show" /><br
                    class="md-none"
                  />ヒアリングし、売上に貢献できるように<br
                    class="md-show"
                  />尽力いたします。
                </p>
              </div>
            </li>
            <li class="service-item">
              <div class="track-record">
                <h3 class="service-title track-record">サービス実績</h3>
                <p class="track-record-text fade-in fade-in-up">
                  自身のポートフォリオを<br
                    class="sp-show"
                  />デザインから作成しました。<br
                    class="pc-show"
                  />クオリティーを上げるべく、<br
                    class="md-show"
                  />大幅な変更を数回しております。<br
                    class="pc-show"
                  />クライアント様と唯一無二の<br
                    class="sp-show"
                  />制作をしていきます。
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
                        <h4>目的<br />料金目安</h4>
                      </th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <h4>
                          名刺代わりの<br />
                          簡単なサイトのデザイン
                        </h4>
                        <p class="pricechart_item__price">
                          初期費用<br />
                          <span></span>
                          ５万円程
                        </p>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <h4>
                          しっかりとした<br />
                          企業サイトのデザイン
                        </h4>
                        <p class="pricechart_item__price">
                          初期費用<br />
                          <span></span>
                          ８万円程
                        </p>
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <h4>
                          集客目的の<br />
                          作り込んだサイト<br />
                          のデザイン
                        </h4>
                        <p class="pricechart_item__price">
                          初期費用<br />
                          <span></span>
                          １５万円程
                        </p>
                      </td>
                    </tr>

                    <tr class="pricechart_item">
                      <th class="pricechart_item__title">全体のページ数</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        6ページほど
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        12ページほど
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        20ページほど
                      </td>
                    </tr>

                    <tr class="pricechart_item">
                      <th class="pricechart_item__title">ロゴ制作</th>
                      <td class="pricechart_item__text pricechart_item__text01">
                        <span class="font_large">△</span>
                        <br />
                        可（１案）
                        <br />
                      </td>
                      <td class="pricechart_item__text pricechart_item__text02">
                        <span class="font_large">◎</span>
                        <br />
                        可（２〜３案）
                        <br />
                      </td>
                      <td class="pricechart_item__text pricechart_item__text03">
                        <span class="font_large">◎</span>
                        <br />
                        可（２〜３案）
                        <br />
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

                    <!-- <tr class="pricechart_item">
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
              <p>
                プロのzoom相談&emsp;1h〜2,000円（税込）<br
                  class="sp-show"
                />も承ります。<br />
                ロゴ制作のみも承りますので<br
                  class="sp-show"
                />お気軽にご相談ください。
              </p>
            </li>
          </ul>
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