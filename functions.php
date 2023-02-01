<?php
// CSSの読み込み関数
function read_css() {
    wp_enqueue_style('destyle', get_template_directory_uri().'/css/destyle.css' );
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array('destyle') );

    // TOPページ（front-page.php）用のCSS
    if (is_front_page()) {
        wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css', array('destyle') );
    }
    // ABOUTページ（page-about.php）用のCSS
    if (is_page("ABOUT")) {
        wp_enqueue_style( 'page-about', get_template_directory_uri() . '/css/page-about.css', array('destyle') );
    }
    // ACTIVITYページ（page-activity.php）用のCSS
    if (is_page("ACTIVITY")) {
        wp_enqueue_style( 'page-activity', get_template_directory_uri() . '/css/page-activity.css', array('destyle') );
    }
    // CONTACTページ（page-contact.php）用のCSS
    if (is_page("CONTACT")) {
        wp_enqueue_style( 'page-contact', get_template_directory_uri() . '/css/page-contact.css', array('destyle') );
    }
    // NEWS一覧ページ（archive.php）用のCSS
    if(is_archive()) {
        wp_enqueue_style('archive', get_template_directory_uri().'/css/archive.css' );
    }
    // NEWS個別ページ（single.php）用のCSS
    if(is_single()) {
        wp_enqueue_style('single', get_template_directory_uri().'/css/single.css' );
    }
    //// メンバー一覧ページ（archive-member.php）用のCSS
    //if(is_post_type_archive('member')) {
    //    wp_enqueue_style('archive-member', get_template_directory_uri().'/css/archive-member.css' );
    // }
    //// メンバー個別ページ（single-member.php）用のCSS
    //if(is_singular('member')) {
    //   wp_enqueue_style('single-member', get_template_directory_uri().'/css/single-member.css' );
    //}
}

add_action('wp_enqueue_scripts','read_css');

// メニューの追加
add_theme_support( 'menus' );

// カスタム投稿タイプの追加
function add_custom_post_type() {
    register_post_type (
        "member",
        array(
            "label" => "MEMBER",
            "public" => true,
            "has_archive" => true,
            "menu_position" => 4,
            "menu_icon" => "dashicons-edit",
            'supports' => array('title','editor','thumbnail')
        )
    );
}
add_action('init', 'add_custom_post_type');

// カスタム投稿のカテゴリー追加
function create_category_taxonomy(){
    register_taxonomy( 'members_category', 'member', array(
        'label' => 'タグ',
        'show_ui' => 'true',
        'hierarchical' => 'true',
    ));
}
add_action('init', 'create_category_taxonomy');


// 投稿画面でアイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');


// 投稿一覧・NEWS（アーカイブ）の追加
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// 画面上のmargin-top消す
add_filter("show_admin_bar", "__return_false");

  
// カスタムヘッダー
add_theme_support( 'custom-header', $custom_header );