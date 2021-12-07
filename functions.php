<?php
// CSSの読み込み関数
function read_css() {
    wp_enqueue_style('destyle', get_template_directory_uri().'/css/destyle.css' );
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array('destyle') );

    // 投稿・お知らせ（single.php）用のCSS
    if(is_single()) {
        wp_enqueue_style('single', get_template_directory_uri().'/css/single.css' );
    }
    // カスタム投稿・メンバー（single-member.php）用のCSS
    if(is_single("メンバー詳細")) {
        wp_enqueue_style('single', get_template_directory_uri().'/css/single-member.css' );
    }
    // コミュニティについてのページ（page-about.php用）
    if (is_page("コミュニティについて")) {
        wp_enqueue_style( 'page-about', get_template_directory_uri() . '/css/page-about.css', array('destyle') );
    }
    // 活動内容ページ（page-activity.php用）
    if (is_page("活動内容")) {
        wp_enqueue_style( 'page-activity', get_template_directory_uri() . '/css/page-activity.css', array('destyle') );
    }



    // 特定のページに読み込ませるCSS
    // if (is_page('ページ名')) {
    //     wp_enqueue_style( 'sample', get_template_directory_uri() . '/css/sample.css', array('destyle') );
    // }
}

add_action('wp_enqueue_scripts','read_css');

// メニューの追加
add_theme_support( 'menus' );

// カスタム投稿タイプの追加
function add_custom_post_type() {
    register_post_type (
        "member",
        array(
            "label" => "メンバー",
            "public" => true,
            "has_archive" => true,
            "menu_position" => 4,
            "menu_icon" => "dashicons-edit"
        )
    );
}
add_action('init', 'add_custom_post_type');


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
// add_filter("show_admin_bar", "__return_false");
