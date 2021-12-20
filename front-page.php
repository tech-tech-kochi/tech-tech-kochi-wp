<?php get_header(); ?>

<main class="main">
    <div class="hero-img">
        <img src="<?php bloginfo('template_directory'); ?>/img/top-img.png" alt="トップ画像">
    </div>

    <div class="container">

        <!-- ABOUT -->
        <div class="main-about main-contents">
            <h2 class="contents-title ">ABOUT<img class="icon" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon.png" alt=""></h2>
            <p>TECH-TECH KOCHI（テクテク高知）は、プログラミング学習の継続を目的としたコミュニティです。<br>
                「1人ではなかなかモチベーションが維持できない・・・」「相談し合える仲間がほしい！」<br>
                そういった方々が楽しく学習を続けられるような場所を作りたいと思い、このコミュニティを立ち上げました。
                現在のメンバー数は約40名ですが、今後はもっと人数を増やしていく予定です。</p>    
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/about/">>> Read more</a>
            </div>
        </div>

        <!-- NEWS -->
        <div class="main-news main-contents">
            <h2 class="contents-title ">NEWS<img class="icon2" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon.png" alt=""></h2>
            <!-- 投稿記事を表示 -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="news-wrapper flex">
                <div class="date"><?php the_time('Y年m月d日'); ?></div>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <?php endwhile; endif; ?>
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/news/">>> Read more</a>
            </div>
        </div>

        <!-- ACTIVITY -->
        <div class="main-activity main-contents">
            <h2 class="contents-title ">ACTIVITY<img class="icon3" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon.png" alt=""></h2>
            <div class="flex">

                <!-- 勉強会 -->
                <div class="activity-contents">
                    <img class="activity-img" src="<?php bloginfo('template_directory'); ?>/img/study.jpg" alt="勉強会">
                    <h3>勉強会</h3>
                    <p>企業が開催しているオンライン勉強会に参加しています。</p>
                </div>

                <!-- チーム開発 -->
                <div class="activity-contents">
                    <img class="activity-img" src="<?php bloginfo('template_directory'); ?>/img/team.jpg" alt="チーム開発">
                    <h3>チーム開発</h3>
                    <p>コミュニティ内のメンバーでアプリやホームページを作っています。</p>
                </div>
            
                <!-- オフ会 -->
                <div class="activity-contents">
                    <img class="activity-img" src="<?php bloginfo('template_directory'); ?>/img/offline-party.jpg" alt="オフ会">
                    <h3>オフ会</h3>
                    <p>オフラインでも交流を楽しめるようにオフ会を開催しています。</p>
                </div>
            </div>

            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/activity/">>> Read more</a>
            </div>
        </div>

        <div class="main-member main-contents">
            <h2 class="contents-title ">MEMBER<img class="icon4" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon.png" alt=""></h2>
            <div class="main-member-wrapper flex">
                <img src="<?php bloginfo('template_directory'); ?>/img/no-image.jpeg" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/img/no-image.jpeg" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/img/no-image.jpeg" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/img/no-image.jpeg" alt="">
            </div>
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/member/">>> Read more</a>
            </div>
        </div>

        <div class="main-contact main-contents">
            <h2 class="contents-title">CONTACT<img class="icon5" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon.png" alt=""></h2>
            <p>「コミュニティに入ってみたい」「話だけでも聞いてみたい」「気になるメンバーに面談をオファーしたい」など、なんでもお気軽にお問い合わせください。</p>
            <div class="button-wrapper">
                <a href="<?php bloginfo('url'); ?>/contact/" class="button">>> CONTACT</a>
            </div>
        </div>


    </div>

</main>

<?php get_footer(); ?>
