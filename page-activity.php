<?php
/*
Template Name: ACTIVITY
*/
?>

<?php get_header(); ?>

<div class="main">
    <div class="page-title-container">
        <h1 class="page-title fs-32px"><?php the_title(); ?></h1>
    </div>

    <div class="container">

        <div class="block">
            <h2 class="subtitle">勉強会</h2>
            <div class="img-wrapper">
                <img src="<?php bloginfo('template_directory'); ?>/img/study.jpg" alt="勉強会">
            </div>
            <div class="text-wrapper">
                <p>企業が開催している勉強会に参加しています。<br>
                オブジェクト指向やサーバレス、Vue.jsなどの勉強会が過去に開催されました。<br>
                現時点では、コミュニティ主催の勉強会はやっておりませんが、今後は企画していく予定です。</p>
            </div>
        </div>

        <div class="block">
            <h2 class="subtitle">チーム開発</h2>
            <div class="img-wrapper">
                <img src="<?php bloginfo('template_directory'); ?>/img/team.jpg" alt="チーム開発">
            </div>
            <div class="text-wrapper">
                <ul class="list-item">
                    <li>ホームページ制作「TECH-TECH KOCHI」</li>
                    <li>未来探しアプリ「Jovie」</li>
                </ul>
                <p>コミュニティ内のメンバー数人が集まり、チーム開発にチャレンジしています。<br>
                じつはこのホームページもメンバーが作りました。<br>
                これからも新しいチームやアイデアが生まれるかもしれません。<br>
                自分でメンバーを募集して、仲間を探すのもいいですね。<br>
                </p>
            </div> 
        </div>

        <div class="block">
            <h2 class="subtitle">オフ会</h2>
            <div class="img-wrapper">
                <img src="<?php bloginfo('template_directory'); ?>/img/offline-party.jpg" alt="オフ会">
            </div>
            <div class="text-wrapper">
            <p>オフ会は過去に一度開催されました。<br>
            <span class="under-line">そのときの参加メンバーは、20名以上。</span><br>
            講座の先生たちも参加してくださり、とても盛り上がりました。<br>
            今後も大小問わず、オフ会を開催していきたいと思っています。</p>
            </div>         
        </div>

        <div class="button-wrapper">
            <a class="button" href="<?php bloginfo('url'); ?>/contact/">>> お問い合わせはこちら</a>
        </div>
    
    </div>
</div>
<?php get_footer(); ?>