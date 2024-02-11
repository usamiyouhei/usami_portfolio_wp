<?php get_header(); ?>
<?php if (function_exists('bcn_display')) { ?>
            <div class="about__breadcrumb">
                <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                    <?php bcn_display(); ?>
                </div>
            </div>
        <?php } ?>
<main>
  <div class="detail__inner">
	<div class="detail">
      <article class="detail__body">
        <time class="detail__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time>
        <div class="detail__categories">
        <?php
$categories = get_the_category();
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        echo '<span class="detail__category">' . esc_html( $category->name ) . '</span>';
    }
}
?>
        </div>
        <h1 class="detail__title"><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('full', array('class' => 'detail__thumbnail')); ?>
<?php else : ?>
    <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
<?php endif; ?>
        <div class="detail__content">
        <?php the_content(); ?>
        </div>
        <div class="detail__other">
        <?php
// 前の記事へのリンク
$prev_icon_path = esc_url(get_theme_file_uri("/img/icon-arrow-prev.svg"));
$prev_link = get_previous_post_link('%link', '<img src="' . $prev_icon_path . '" class="detail__prev-icon" alt="前の記事"><span class="detail__link-text">前の記事へ</span>');
if (!empty($prev_link)) {
    echo str_replace('<a href=', '<a class="detail__prev" href=', $prev_link);
}

// 次の記事へのリンク
$next_icon_path =
    esc_url(get_theme_file_uri("/img/icon-arrow-next.svg"));
$next_link = get_next_post_link('%link', '<span class="detail__link-text">次の記事へ</span><img src="' . $next_icon_path . '" class="detail__next-icon" alt="次の記事">');
if (!empty($next_link)) {
    echo str_replace('<a href=', '<a class="detail__next" href=', $next_link);
}
?>

             </div>
      </article>
    </div>

    <aside class="detail__side">
    <div class="detail__group">
        <div class="detail__side-title">最新記事</div>
        <?php
        $args = array(
            "post_type" => "post",
            "posts_per_page" => 3,
            "orderby" => "date",
            "order" => "DESC",
                );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
            <ul class="detail__list">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="detail__article">
                        <a href="<?php the_permalink(); ?>" class="detail__link">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('full', array('class' => 'detail__img')); ?>
                      <?php else : ?>
                          <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                      <?php endif; ?>  
                           <div class="detail__text">
                                <h3 class="detail__summary"><?php the_title(); ?></h3>
                                <time class="detail__day" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time>
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


<div class="detail__group">
    <div class="detail__side-title">アーカイブ</div>
    <ul class="detail__list">
    <?php wp_get_archives('type=monthly&limit=12'); ?>
</ul>

<div class="detail__group">
  <div class="detail__side-title">カテゴリー</div>
  <ul class="detail__list">
  <?php
    $categories = get_categories();
    foreach ($categories as $category) {
        echo '<li class="detail__item"><a class="detail__link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    ?>
  </ul>
</div>
</aside>
</div>
</div>
</main>
<?php get_footer(); ?>