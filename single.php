<style>
    .content-container {
        width: 60%;
        margin: 80px auto;
    }
    .single-post-container {
        margin: 50px 0;
    }
    .single-date {
        margin-right: 20px;
    }
    .single-title {
        margin: 20px 0;
    }
    .single-text {
        margin: 50px 0 70px 0;
    }
    .back-button {
        border: 1px solid;
        margin: 0 auto;
        padding: 10px 20px;
    }
</style>
<?php get_header(); ?>
<!-- 記事ページ -->
<div class="main">
    <div class="page-title-container">
        <p class="page-title fc-wht fs-32px">NEWS</p>
    </div>
    <div class="content-container ">
         <div class="single-post-container">
           <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="flex">
                        <p class="single-date"><?php the_time('Y.m.d'); ?></p>
                        <p class="single-category"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></p>
                    </div>
                    <h1 class="single-title fs-32px"><?php the_title(); ?></h1>
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