<?php
/*
Template Name: メンバー詳細
*/
?>
<?php get_header(); ?>
<div class="main main_wrap flex">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="member-content-container">
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