<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1", true);
    wp_enqueue_script( 'swiper', '//unpkg.com/swiper@8/swiper-bundle.min.js', "", "1.0.1", true );
    // wp_enqueue_style( "Yu Gothic", '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap' );
    wp_enqueue_style( "Poppins", '//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap' );
    wp_enqueue_style(  "Italianno", '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,200;1,300;1,400;1,500;1,600&family=Italianno&display=swap' );
    wp_enqueue_style('fontawesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css',array(),'6.1.1');
    wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.15.4/css/all.css' );
    wp_enqueue_style( 'fontawesome', '//kit.fontawesome.com/b055b2123e.js' );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.1', true);
    wp_enqueue_script('slick.min',get_stylesheet_directory_uri().'/slick/slick.min.js',array( 'jquery' ),'1.8.1', true);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.1');
    // wp_enqueue_style('s_style-css', get_template_directory_uri() . '/css/service.css', array(), '1.0.1');
    // wp_enqueue_style('w_style-css', get_template_directory_uri() . '/css/works_style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');


function custom_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('works')) {
            // 表示件数を指定
            $query->set('posts_per_page', 10);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');

function custom_home_template( $template ) {
    $request_path = trim( parse_url( add_query_arg( array() ), PHP_URL_PATH ), '/' );
    if ( 'news' === $request_path ) {
        $new_template = locate_template( array( 'home.php' ) );
        if ( ! empty( $new_template ) ) {
            return $new_template;
        }
    }
    return $template;
}
add_filter( 'template_include', 'custom_home_template' );


?>