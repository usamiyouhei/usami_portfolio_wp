<?php get_header(); ?>
<main>
    <div class="works">
        <div class="works__fv">
            <h1 class="works__title">タクソノミー別一覧</h1>
        </div>
        <div class="work__inner">
            <div class="news">
                <?php
								$args = array(
								    "post_type" => "works",
                    'tax_query' => array(
                      array(
                          // タクソノミーのスラッグを指定
                          'taxonomy' => 'genre',
                          'field'    => 'slug',
                          'terms'    => $genre_slug,
                      ),
                  ),
								);
								$the_query = new WP_Query($args);
								?>
								<?php if ($the_query->have_posts()) : ?>
								    <ul class="news__items">
								        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
								            <li class="news__item">
								                <a href="<?php the_permalink(); ?>" class="news__link">
								                    <?php if (has_post_thumbnail()) : ?>
								                        <?php the_post_thumbnail('full', array('class' => 'news__img')); ?>
								                    <?php else : ?>
								                        <img class="news__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>)" alt="NoImage画像" />
								                    <?php endif; ?>
								                    <div class="news__text-wrapper">
								                        <div class="news__information">
								                            <time class="news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
								                            <?php
								                            $taxonomy_terms = get_the_terms($post->ID, 'genre');
								                            if (!empty($taxonomy_terms)) {
								                                $limit = 5;
								                                $count = 0;
								                                foreach ($taxonomy_terms as $taxonomy_term) {
								                                    if ($count < $limit) {
								                                        echo '<span class="news__category">' . esc_html($taxonomy_term->name) . '</span>';
								                                        $count++;
								                                    } else {
								                                        break;
								                                    }
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
            <?php
            $args = array(
                'mid_size' => 1,
                'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-prev.svg")) . '" alt="" class="pagination__arrow">',
                'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/icon-arrow-next.svg")) . '" alt="" class="pagination__arrow">',
            );
            the_posts_pagination($args);
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>