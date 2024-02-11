<?php get_header(); ?>
<main>
	<div class="works">
    <div class="works__fv">
        <h1 class="works__title">実績一覧</h1>
    </div>
    <div class="works__inner">
      <div class="news">
      <?php
          $args = array(
              "post_type" => "works",
              "posts_per_page" => 10
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
        <ul class="news__items">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        
          <li class="news__item">
            <a href="<?php the_permalink(); ?>" class="news__link">
            <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail( 'full', array( 'class' => 'news__img' ) ); ?>
              <?php else : ?>
                  <img class="news__img" src="<?php echo esc_url(get_theme_file_uri( "/images/noimage.jpg" )); ?>)" alt="NoImage画像" />
              <?php endif ; ?>
            <div class="news__text-wrapper">
                <div class="news__information">
                  <time class="news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  <?php
                $taxonomy_terms = get_the_terms($post->ID, 'genre');
                if ( ! empty( $taxonomy_terms ) ) {
                    foreach( $taxonomy_terms as $taxonomy_term ) {
                        echo '<span class="news__category">' . esc_html( $taxonomy_term->name ) . '</span>';
                    }
                }
            ?>
                </div>
                <div class="news__title"><?php the_title(); ?></div>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </ul>
<?php else : ?>
    <p>記事が投稿されていません</p>
<?php endif; ?>
      </div>
      <div class="tab">
<?php
$current_term_id = get_queried_object()->term_id;
$terms = get_terms(array(
		// 表示するタクソノミースラッグを記述
    'taxonomy' => 'genre',
    'orderby' => 'name',
    'order'   => 'ASC',
    // 表示するタームの数を指定
    'number'  => 5
));

// カスタム投稿一覧ページへのURL
$home_class = (is_post_type_archive()) ? 'is-active' : '';
$home_link = sprintf(
    //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
    '<a class="tab__link %s" href="%s" alt="%s">全て</a>',
    $home_class,
    // カスタム投稿一覧ページのスラッグを指定
    esc_url(home_url('/works')),
    esc_attr(__('View all posts', 'textdomain'))
);
echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

// タームのリンク
if ($terms) {
    foreach ($terms as $term) {
        // カレントクラスに付与するクラスを指定できる
        $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
        $term_link = sprintf(
            // 各タームに付与するクラスを指定できる
            '<a class="tab__link %s" href="%s" alt="%s">%s</a>',
            $term_class,
            esc_url(get_term_link($term->term_id)),
            esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
            esc_html($term->name)
        );
        echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
    }
}
?>
</div>
      <?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/img/icon-arrow-prev.svg")) . '" alt="" class="pagination__arrow">',
    'next_text' => '<img src="' . esc_url(get_theme_file_uri("/img/icon-arrow-next.svg")) . '" alt="" class="pagination__arrow">',
);
the_posts_pagination($args);
?>
    </div>
  </div>
</main>
<?php get_footer(); ?>