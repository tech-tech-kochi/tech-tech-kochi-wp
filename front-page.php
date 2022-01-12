<?php get_header(); ?>

<main class="main">
    <div class="top-container">
        <img class="top-img" src="<?php bloginfo('template_directory'); ?>/img/top-img.jpeg" alt="トップ画像">
        <div class="top-design">
            <p>WE DO IT,<br>BUT<br>YOU DON'T?</p>
        </div>
    </div>

    <div class="container">

        <!-- ABOUT -->
        <div class="main-about main-contents">
                <div class="content-container">
                    <div class="title-walk">
                        <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon1.png" alt="">
                        <h2 class="contents-title">ABOUT</h2>
                    </div>
                    <p class="clearfix">TECH-TECH KOCHI（テクテク高知）は、プログラミング学習の継続を目的としたコミュニティです。<br>
                        「1人ではなかなかモチベーションが維持できない・・・」<br>
                        「相談し合える仲間がほしい！」<br>
                        そういった方々が楽しく学習を続けられるような場所を作りたいと思い、このコミュニティを立ち上げました。<br>
                        現在のメンバー数は約40名ですが、今後はもっと人数を増やしていく予定です。
                    </p> 
                </div>
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/about/">>> コミュニティについて</a>
            </div>
        </div>

        <!-- NEWS -->
        <div class="main-news main-contents">
            <div class="title-walk">
                <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon2.png" alt="">
                <h2 class="contents-title ">NEWS</h2>
            </div>
            <!-- 投稿記事を表示 -->
            <div class="news-container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="news-wrapper clearfix flex">
                    <div class="news-category-date">
                        <div class="news-category"><?php the_category() ?></div>
                        <div class="news-date"><?php the_time('Y年m月d日'); ?></div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
                </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/news/">>> ニュース一覧を見る</a>
            </div>
        </div>

        <!-- ACTIVITY -->
        <div class="main-activity main-contents">
            <div class="title-walk">
                <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon4.png" alt="">
                <h2 class="contents-title ">ACTIVITY</h2>
            </div>
            <div class="activity-container">
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
                <a class="button" href="<?php bloginfo('url'); ?>/activity/">>> 活動内容について</a>
            </div>
        </div>

        <!-- MEMBER -->
        <div class="main-member main-contents">
            <div class="title-walk">
                <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon5.png" alt="">
                <h2 class="contents-title ">MEMBER</h2>
            </div>
            <div class="main-member-wrapper flex">
                <a href="https://tech-tech-kochi.com/member/takeda-keiko/">
                    <img src="<?php bloginfo('template_directory'); ?>/img/member/takeda.jpg" alt="">
                </a>
                <a href="https://tech-tech-kochi.com/member/mimoto-michiyo/">
                    <img src="<?php bloginfo('template_directory'); ?>/img/member/mimoto.png" alt="">
                    </a>
                <a href="https://tech-tech-kochi.com/member/sugiuchi-soya/">
                    <img src="<?php bloginfo('template_directory'); ?>/img/member/sugiuchi.png" alt="">
                </a>
                <a href="https://tech-tech-kochi.com/member/nakaoka-moe/">
                    <img src="<?php bloginfo('template_directory'); ?>/img/no-image.jpeg" alt="">
                </a>
            </div>
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/member/">>> メンバーを見る</a>
            </div>
        </div>

        <!--  CONTACT -->
        <div class="main-contact main-contents">
            <div class="title-walk">
                <img class="icon" src="<?php bloginfo('template_directory'); ?>/img/techtech-icon3.png" alt="">
                <h2 class="contents-title">CONTACT</h2>
            </div>    
            <p>
                「コミュニティに入ってみたい」「話だけでも聞いてみたい」「気になるメンバーに面談をオファーしたい」など、<br>
                なんでもお気軽にお問い合わせください。
            </p>
            <div class="button-wrapper">
                <a href="<?php bloginfo('url'); ?>/contact/" class="button">>> お問い合わせ</a>
            </div>
        </div>


    </div>

</main>

<?php get_footer(); ?>
