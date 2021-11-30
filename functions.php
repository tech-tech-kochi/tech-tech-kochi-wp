<?php
// CSSの読み込み関数
function read_css() {
    wp_enqueue_style('destyle', get_template_directory_uri().'/css/destyle.css' );
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array('destyle') );

    // 特定のページに読み込ませるCSS
    // if (is_page('ページ名')) {
    //     wp_enqueue_style( 'sample', get_template_directory_uri() . '/css/sample.css', array('destyle') );
    // }
}

add_action('wp_enqueue_scripts','read_css');


// 画面上のmargin-top消す
add_filter("show_admin_bar", "__return_false");
