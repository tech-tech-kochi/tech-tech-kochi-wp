<?php get_header(); ?>


<main class="main bg-yel">
    <div class="container">
        <div class="hero-img">
            <h1>TECH-TECH KOCHI</h1>
        </div> 

        <div class="main-news main-contents">
            <h2 class="contents-title fc-wht ">NEWS</h2>
            <!-- 投稿記事を表示 -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="news-wrapper flex">
                <div class="date"><?php the_time('Y年m月d日'); ?></div>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <?php endwhile; endif; ?>

            <div class="read-more">
                <a href="<?php bloginfo('url'); ?>/news/">>> Read more</a>
            </div>

        </div>

        <div class="main-about main-contents">
            <h2 class="contents-title fc-wht ">ABOUT</h2>
            <p>サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル</p>

            <div class="read-more">
                <a href="<?php bloginfo('url'); ?>/about/">>> Read more</a>
            </div>

        </div>

        <div class="main-activity main-contents">
            <h2 class="contents-title fc-wht ">ACTIVITY</h2>
            <p>サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル</p>

            <div class="read-more">
                <a href="<?php bloginfo('url'); ?>/activity/">>> Read more</a>
            </div>
            
        </div>

        <div class="main-menber main-contents">
            <h2 class="contents-title fc-wht">MEMBER</h2>
            <p>サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル
                サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル</p>

            <div class="read-more">
                <a href="<?php bloginfo('url'); ?>/member/">>> Read more</a>
            </div>
        </div>

        <div class="main-contact">
            <h2>CONTACT</h2>

        </div>


    </div>

</main>



<?php get_footer(); ?>
