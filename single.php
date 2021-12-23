<?php get_header(); ?>
<!-- 記事ページ -->
<div class="main">
    <div class="si-news-content-container">
         <div class="single-post-container">
           <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="flex">
                        <p class="single-date"><?php the_time('Y.m.d'); ?></p>
                        <p class="news-category"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></p>
                    </div>
                    <h1 class="single-title"><?php the_title(); ?></h1>
                    <div class="single-text"><?php the_content();?></div>
                <?php endwhile; ?>
            <?php else : ?>
                <div>記事が存在していないです。</div>
            <?php endif; ?>
         </div>
         <a href="<?php bloginfo('url'); ?>/news/" class="back-button">BACK</a>
    </div>
</div>
<?php get_footer(); ?>