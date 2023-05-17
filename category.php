<?php get_header(); ?>
<div class="main">
  <div class="page-title-container">
    <h1 class="page-title fs-32px">カテゴリー: <?php single_cat_title(); ?>の一覧</h1>
  </div>
  <div class="ar-news-content-container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="news-container">
        <div class="news-wrapper clearfix flex">
          <div class="news-category-date">
            <div class="news-category">
              <?php the_category() ?>
            </div>
            <div class="news-date"><?php the_time('Y年m月d日'); ?></div>
          </div>
          <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
        </div>
      </div>
    <?php endwhile;endif; wp_reset_query(); ?>
  </div>
</div>
<?php get_footer(); ?>
