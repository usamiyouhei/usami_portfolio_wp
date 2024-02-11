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

     
     
<div class="tab">
<?php
$current_category_id = get_queried_object_id();
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC',
    // 表示するカテゴリーの数を指定
    'number'  => 5
));

// 通常投稿一覧ページへのURL
$home_class = (is_home() || is_front_page()) ? 'is-active' : '';
$home_link = sprintf(
    //通常投稿一覧ページへのaタグに付与するクラスを指定できる
    '<a class="tab__link %s" href="%s" alt="%s">全て</a>',
    $home_class,
    // 通常投稿一覧ページのスラッグを指定
    esc_url(home_url('/news')),
    esc_attr(__('View all posts', 'textdomain'))
);
echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

// カテゴリーのリンク
if ($categories) {
    foreach ($categories as $category) {
        // カレントクラスに付与するクラスを指定できる
        $category_class = ($current_category_id === $category->term_id) ? 'is-active' : '';
        $category_link = sprintf(
            // 各カテゴリーに付与するクラスを指定できる
            '<a class="tab__link %s" href="%s" alt="%s">%s</a>',
            $category_class,
            esc_url(get_category_link($category->term_id)),
            esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
            esc_html($category->name)
        );
        echo sprintf(esc_html__('%s', 'textdomain'), $category_link);
    }
}
?>
</div>

</main>
<?php get_footer(); ?>