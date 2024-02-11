<?php get_header(); ?>
<?php if (function_exists('bcn_display')) { ?>
            <div class="about__breadcrumb">
                <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                    <?php bcn_display(); ?>
                </div>
            </div>
        <?php } ?>
<main>
<section id="news" class="news scroll-point">
        <div class="news__inner inner">
          <div class="news__title section-title">
            <span>News</span>
            <h2>お知らせ</h2>
          </div>
          <?php if (have_posts()) : ?>
          <ul class="news__items">
          <?php while (have_posts()) : the_post(); ?>
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
              <?php
														$categories = get_the_category();
														if (!empty($categories)) {
														    $limit = 5;
														    $count = 0;
														    foreach ($categories as $category) {
														        if ($count < $limit) {
														            echo '<span class="news__category">' . esc_html($category->name) . '</span>';
														            $count++;
														        } else {
														            break;
														        }
														    }
														}
														?>
            </div>
            <?php endwhile; ?>
          </ul>
          <?php else : ?>
    <p>記事が投稿されていません</p>
<?php endif; ?>
      </section>

      <?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/img/icon-arrow-prev.svg")) . '" alt="" class="pagination__arrow">',
    'next_text' => '<img src="' . esc_url(get_theme_file_uri("/img/icon-arrow-next.svg")) . '" alt="" class="pagination__arrow">',
);
the_posts_pagination($args);
?>
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

      <!-- <section class="news-section-n " id="News">
        <div class="container">
        <div class="section-title">
          <h2>News</h2>
          <span>お知らせ</span>
        </div>
      </div>
        <div class="news-inner-n container">
        <ul class="news-list-n">
          <li>
            <div class="news-item-n">
            <time datetime="2023.11.10">2023.11.10</time>
            <span>初  Node.js</span>
            <p>Node.jsの学習始めました</p>
          </div>
          </li>
          <li>
           <div  class="news-item-n">
            <time datetime="2023.11.8">2023.11.8</time>
            <span>初  React</span>
            <p>Reactの学習始めました</p>
        </div>
          </li>
          <li>
            <div  class="news-item-n">
            <time datetime="2023.11.7">2023.11.7</time>
            <span>初 Figma</span>
            <p>Figmaを使用してデザインカンプ始めました。</p>
          </div>
          </li>
        </ul>
        </div>
    
        <div class="after container">
          <div class="section-title">
            <h2>今後の展開</h2>
          </div>
          
            <ul>
              <div class="after-item">
            <li>
              <span>初   Figma</span>
              <p>Figmaを使用してデザインカンプ始めました。</p>
            </li>
           </div>
              <div class="after-item">
            <li>
              <span>初   Figma</span>
              <p>Figmaを使用してデザインカンプ始めました。</p>
            </li>
           </div>
         </ul>
        </div>
    <div class="m-btn">
      <a href=""><span>お問い合わせはこちら</span></a>
      <i class="fa-solid fa-angles-right"></i>
    </div>
    </div>
      </section> -->
     
    

</main>
<?php get_footer(); ?>