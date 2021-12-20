<?php
/*
Template Name: ABOUT
*/
?>
<?php get_header(); ?>
<div class="main">
    <div class="page-title-container">
        <h1 class="page-title fc-wht fs-32px"><?php the_title(); ?></h1>
    </div>
    <div class="container">
        
        <div class="block">
            <h2 class="subtitle">TECH-TECH KOCHI（テクテク高知）とは</h2>
            <div class="img-wrapper">
                <img src="<?php bloginfo('template_directory'); ?>/img/pc-work.jpg" alt="">
            </div>
            <div class="text-wrapper">
                <p>TECH-TECH KOCHIは、プログラミング学習の継続を目的としたコミュニティです。<br>
                <span class="under-line">「1人ではなかなかモチベーションが維持できない・・・」</span><br>
                <span class="under-line">「相談し合える仲間がほしい！」</span><br>
                そういった方々が楽しく学習を続けられるような場所を作りたいと思い、このコミュニティを立ち上げました。<br>
                現在のメンバー数は約40名ですが、今後はもっと人数を増やしていく予定です。<br>
                少しでも興味がある方は、ぜひ問い合わせページからお気軽にご連絡ください。<br>
                </p>
            </div>
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/contact/">>> お問い合わせはこちら</a>
            </div>
        </div>

        <div class="block">
            <h2 class="subtitle">どんな活動をしているの？</h2>
            <div class="img-wrapper">
                <img src="<?php bloginfo('template_directory'); ?>/img/slack-img.png" alt="">
            </div>
            <div class="text-wrapper">
                <ul class="list-item">
                    <li>チャットツール「Slack」を使ったコミュニケーション</li>
                    <li>チーム開発体験（アプリ開発やホームページ制作など）</li>
                    <li>オンライン勉強会</li>
                    <li>バーチャルオフィスを活用したもくもく会（Gather Town）</li>
                    <li>オフライン飲み会</li>
                    <li>IT転職に向けた準備</li>
                </ul>
                <p><span class="small">※もくもく会とは、みんなで集まって黙々と作業をするだけの会です。</span><br>
                コミュニケーションツールとして「Slack」を利用しています。（上記画像を参照）<br>
                Slackとは、ビジネスでよく使われているチャットツールです。<br>
                <span class="under-line">プログラミングに関する質問や学習報告をはじめ、プライベートな内容や雑談も投稿されています。</span><br>
                一部のメンバーは、バーチャルオフィス「Gather Town」に集まり、夜な夜な作業をしています。<br>
                まだまだ運営体制が整っていませんが、今後は勉強会やオフ会もどんどん企画していく予定です。</p>
            </div>
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/activity/">>> 活動内容はこちら</a>
            </div>
        </div>

        <div class="block">
            <h2 class="subtitle">どんな人が在籍しているの？</h2>
            <div class="img-wrapper">
                <img src="<?php bloginfo('template_directory'); ?>/img/member.jpg" alt="">
            </div>
            <div class="text-wrapper">
                <ul class="list-item">
                    <li>高知県プログラミング講座の卒業生</li>
                    <li>IT業界への転職を目指している人</li>
                    <li>現役の若手エンジニア</li>
                    <li>データアナリスト</li>
                    <li>プログラミング講座の講師や関係者</li>
                </ul>
                <p>このコミュニティーに在籍している人の多くは、高知県が主催するプログラミング講座の卒業生です。<br>
                今後は卒業生以外の方でも参加できるオープンなコミュニティーにしていきたいと考えています。</p>
            </div>
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/member/">>> メンバーページはこちら</a>
            </div>
        </div>

        <div class="block">
            <h2 class="subtitle">このコミュニティーを作ったきっかけは？</h2>
            <div class="img-wrapper">
                <img src="<?php bloginfo('template_directory'); ?>/img/wp-code-img.jpg" alt="">
            </div>

            <div class="text-wrapper">
                <p>コミュニティの運営者は二人のはちきん（武田・味元）です。<br>
                私たちは高知県が主催する４ヶ月間のプログラミング講座を受講し、県内のIT企業に転職しました。<br>
                しかし、プログラミングの技術はまだまだひよっこ。<br>
                卒業後も受講生同士で、連絡を取り合いながら、勉強会を開催したりと学習を続けていました。<br>
                そのとき感じたのは、<span class="under-line">「つまづいたときに相談できる仲間がいると、高いモチベーションを維持できる」</span>ということです。<br>
                そこでプログラミング講座を卒業した受講生の方々にお声がけして、コミュニティに参加していただきました。<br>
                もっと仲間を増やして、みんなが学習を継続できる仕組みを作っていきたいです。<br>
                </p>
            </div>
        </div>
        
        <div class="block">
            <h2 class="subtitle">今後はどんなコミュニティを目指していくのか？</h2>
            <div class="img-wrapper">
                <img src="<?php bloginfo('template_directory'); ?>/img/future.jpg" alt="">
            </div>            
            <div class="text-wrapper">
                <p>今はまだプログラミング学習者しか在籍していませんが、もっといろんな人が集まる場所にしていきたいと考えています。<br>
                例えば、<span class="under-line">AI、ノーコード、動画編集、Webデザイン、Webマーケティングなど、</span>ITに関する勉強をしている人なら誰でも参加できるようにしたいのです。<br>
                それぞれが得意なことを伸ばし、ときには助け合いながら技術力を高め合っていけるような場所を目指しています。<br>
                チーム開発でみんなの力を合わせれば、コミュニティ発のサービスを作ることも不可能ではありません。<br>
                このコミュニティの輪がどんどん広がって、ゆくゆくは高知のIT業界が盛り上がっていけばいいなと思っています。<br>
                <br>
                <span class="signature">コミュニティ運営者　武田・味元</span><br>
                </p>
            </div>
            <div class="button-wrapper">
                <a class="button" href="<?php bloginfo('url'); ?>/contact/">>> お問い合わせはこちら</a>
            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>
