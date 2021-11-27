<?php
// CSSの読み込み関数
function read_css() {
    wp_enqueue_style('destyle', get_template_directory_uri().'/css/destyle.css' );
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css', array('destyle') );
}

add_action('wp_enqueue_scripts','read_css');
