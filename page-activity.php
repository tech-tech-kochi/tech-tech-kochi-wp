<?php
/*
Template Name: 活動内容
*/
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>活動内容について</title>
    <?php wp_head(); ?>
</head>
<style>
    .title {
        margin-bottom: 10px;
    }
    .page-container {
        width:960px;
        margin: 70px auto;
    }
    .content-container {
        margin: 20px;
    }
    .item-container {
        margin-left: 20px;
    }
</style>
<body>
    <?php get_header(); ?>
    <div class="page-title-container">
        <p class="page-title fc-wht fs-32px">活動内容</p>
    </div>
    <div class="page-container">
    <?php
    global $post;
    $args = array('posts_per_page' => 8);
    $myposts = get_posts($args);
    foreach ($myposts as $post) {
        setup_postdata($post);
    ?>
        <div class="content-container">
            <div class="time fc-gry">
                <?php the_time('Y.m.d') ?>
            </div>
            <div class="item-container">
            <div class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="category">
                <?php the_category(',') ?>
            </div>
            </div>
        </div>
        <div class="border"></div>
    <?php
    }
    wp_reset_postdata();
    ?>
    </div>
    <?php get_footer(); ?>
    <?php wp_footer() ?>
</body>
</html>