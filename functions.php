<?php

// jsの読み込み
function add_js()
{
    wp_enqueue_script(
        'custom_js',
        get_template_directory_uri() . '/js/bootstrap.bundle.js',
        array('jquery'),
        true
    );
}
add_action('wp_enqueue_scripts', 'add_js');

// カスタムヘッダー
add_theme_support(
    'custom-header',
    array(
		'width' => 950,
		'height' => 295,
		'header-text' => false,
		'default-image' => '%s/images/slide_01.jpg',
	)
);

// カスタムメニュー
register_nav_menus(
    array(
		'place_global' => 'グローバル',
		'place_utility' => 'ユーティリティ',
	)
);

// 開発用、キャッシュを常に新しくして読み込ませる
wp_enqueue_style('twentysixteen-style', get_stylesheet_uri(), null, microtime());

// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

// アイキャッチ画像サイズ設定
set_post_thumbnail_size(100, 100, true);

// archive用画像サイズ設定
add_image_size('small_thumbnail', 150, 150, true);

// sidebar用画像サイズ設定
add_image_size('large_thumbnail', 350, 200, true);

// サブページヘッダー用画像サイズ設定
add_image_size('category_image', 600, 300, true);

// モールイメージ用画像サイズ設定
add_image_size('pickup_thumbnail', 302, 123, true);

// ウィジェット
register_sidebar(array(
	'name' => 'サイドバーウィジェットエリア（上）',
	'id' => 'primary-widget-area',
	'description' => 'サイドバー上部のウィジェットエリア',
	'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h1 class="widget-title">',
	'after_title' => '</h1>'
));

register_sidebar(array(
	'name' => 'サイドバーウィジェットエリア（下）',
	'id' => 'secondary-widget-area',
	'description' => 'サイドバー下部のウィジェットエリア',
	'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
	'after-widget' => '</aside>',
	'before_title' => '<h1 class="widget-title">',
	'after_title' => '</h1>',
));

register_sidebar(array(
	'name' => 'トップ右ウィジェット(言語用)',
	'id' => 'language-widget-area',
	'description' => '言語用トップ右ウィジェット',
));

// 抜粋文が自動的に生成される場合に最後に付与される文字列を変更します。
function cms_excerpt_more()
{
    return '...';
}
add_filter('excerpt_more', 'cms_excerpt_more');

// 抜粋文が自動的に生成される場合にデフォルトの文字列を変更します。
function cms_excerpt_length()
{
    return 120;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');

/* 英語時の抜粋文 */
function en_length($length) {
    return 20;
}
if(get_locale() == 'ja'):
else:
add_filter('excerpt_length', 'en_length');
endif;


// 固定ページで抜粋文を入力できるようにする。
add_post_type_support('page', 'excerpt');

// 30文字表示抜粋（自動生成時）表示テンプレートタグの定義
function the_short_excerpt()
{
    add_filter('excerpt_mblength', 'short_excerpt_length', '11');
    the_excerpt();
    remove_filter('excerpt_mblength', 'short_excerpt_length', '11');
}

function short_excerpt_length()
{
    return 30;
}

// 50文字表示抜粋表示テンプレートタグの定義
function the_pickup_excerpt()
{
    add_filter('get_the_excerpt', 'get_pickup_excerpt', 0);
    add_filter('excerpt_mblength', 'pickup_excerpt_length', 11);
    the_excerpt();
    remove_filter('get_the_excerpt', 'get_pickup_excerpt', 0);
    remove_filter('excerpt_mblength', 'pickup_excerpt_length', 11);
}

// トップページのピックアップ（モール紹介）部分の抜粋文を切り詰める
function get_pickup_excerpt($excerpt)
{
    if ($excerpt) {
        $excerpt = strip_tags($excerpt);
        $excerpt = mb_strlen($excerpt);
        if ($excerpt_len > 50) {
            $excerpt = mb_substr($excerpt, 0, 50). '...';
        }
    }
    return $excerpt;
}

function pickup_excerpt_length()
{
    return 50;
}

// カテゴリー画像の表示
// 1.アイキャッチ画像が設定されている場合は、アイキャッチ画像を使用
// 2.アイキャッチ画像が設定されていない固定ページで、最上位の固定ページにアイキャッチ画像が設定されている場合は、そのアイキャッチ画像を使用。
// 3．それ以外の場合は、デフォルトの画像を表示
function the_category_image()
{
    global $post;
    $image = "";

    if (is_singular() && has_post_thumbnail()) {
        $image = get_the_post_thumbnail(null, 'category_image', array('id' => 'category_image'));
    } elseif (is_page() && has_post_thumbnail(array_pop(get_post_ancestors($post)))) {
        $image = get_the_post_thumbnail(array_pop(get_post_ancestors($post)), 'category_image', array('id' => 'category_image'));
    }

    if ($image == "") {
        $src = get_template_directory_uri() . '/images/category/default.png';
        $image = '<img src="' . $src . '" class="attachment-category_image wp-post-image img-thumbnail" alt="" id="category_image" />';
    }
    echo $image;
}

// ページ間ナビゲーションにボタンクラスを追加

add_filter('previous_post_link', 'add_prev_post_link_class');
function add_prev_post_link_class($output)
{
    return str_replace('<a href=', '<small>前の記事</small><a class="btn btn-light btn-block text-left py-4" href=', $output);
}
add_filter('next_post_link', 'add_next_post_link_class');
function add_next_post_link_class($output)
{
    return str_replace('<a href=', '<small>次の記事</small><a class="btn btn-light btn-block text-right py-4" href=', $output);
}

// ペジネーションにクラスを追加
add_filter('page_navi', 'add_page_navi_class');
function add_page_navi_class($output)
{
    if (function_exists('page_navi')):
    return str_replace('<a href=', '<a class="page-link border-0 text-dark" href=', $output);
    endif;
}

// polylangにclass付加
add_filter( 'pll_the_languages', 'theme_pll_the_languages');
function theme_pll_the_languages($output)
{
	if (function_exists('pll_the_languages')):
	return str_replace('li class="', 'li class="nav-item ', $output);
	endif;
}

function switch_lang($text_data, $entry){
	if(get_locale() == 'ja'):
	$output = $text_data[$entry][0];
	else:
	$output = $text_data[$entry][1];
	endif;
	echo $output;
}

/* ↑こんな感じで連想配列を用意する */
/* $text_data = [
 * 	'lang' => ['ja', 'en'],
 * 	'menu' => ['メニュー', 'Menu'],
 * 	'math' => ['数学塾', 'Math'],
 * 	'programming' => ['プログラミング教室', 'Programming'],
 * 	'info' => ['店舗情報', 'Info'],
 * ]; */

function switch_date(){
	if(get_locale() == 'ja'):
	echo the_time(get_option('date_format'));
	else:
	echo get_post_time('F jS, Y');
	endif;
}

function suffix_en(){
	if(get_locale() == 'ja'):
	else:
	echo "-en";
	endif;
}
