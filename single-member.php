<?php
/*
Template Name: メンバー詳細
*/
?>
<style>
    .main_wrap {
        margin: 30px auto;
        padding: 70px 100px;
        justify-content: space-between;
    }
    .content-container {
        width: 60%;
        padding: 0 20px;
    }
    .single-thumb {
        text-align: right;
    }
    .single-thumb img {
        width: 80%;
        height: auto;
    }
    .single-name {
        margin: 30px 0;
    }
    .single-text {
        word-wrap: break-word;
    }
</style>
<?php get_header(); ?>
<div class="main main_wrap bg-yel flex">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="content-container">
                    <div class="single-name fs-32px"><?php the_title(); ?></div>
                    <div class="single-text"><?php the_content();?></div>
                </div>
                <div class="single-thumb">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div>記事が存在していないです。</div>
        <?php endif; ?>
</div>
<?php get_footer(); ?>