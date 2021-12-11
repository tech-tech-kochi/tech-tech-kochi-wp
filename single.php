<?php get_header(); ?>
<!-- 記事ページ -->
<section class="main_post">
    <div class="main_post_wrap">
         <div class="single_post_container">
           <?php if (have_posts()) : ?>
           <?php while (have_posts()) : the_post(); ?>
            <div class="post_meta">
                <!-- 日付 -->
                <p class="post_time"><?php the_time( get_option( 'date_format' ) ); ?></p>
                <!-- カテゴリー -->
                <p class="post_cat"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></p>
            </div>
            <!— 記事のタイトル —>
            <h1 class="single_ttl"><?php the_title(); ?></h1>
            <article class="detail_text">
                <!-- アイキャッチ画像 -->
                <p class="single_thumb"><?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?></p>
                <!-- 記事の本文 -->
                <div class="post_body"><?php the_content();?></div>
            </article>

            <?php endwhile; ?>
            
            <?php else : ?>
                <div>記事が存在していないです。</div>
            <?php endif; ?>

         </div>
         <!-- サイトバー -->
        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>