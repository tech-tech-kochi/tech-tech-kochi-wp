<style>
    .item {
        text-align: center;
    }
    .content-container {
        padding: 100px 50px;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .member-container {
        width: 300px;
        word-wrap: break-word;
        margin: 20px;
        text-align: center;
    }
    .member-img img {
        height: 250px;
        width: 250px;
        border-radius: 50%;
        object-fit:cover;
    }
    .member-name {
        margin: 20px 0 10px 0;
    }
</style>
<?php get_header(); ?>
<main class="main">
    <div class="page-title-container">  
        <p class="page-title fc-wht fs-32px">MEMBER</p>
    </div>
    <div class="content content-container flex">
        <?php $args = array(
        'post_type' => 'member' //カスタム投稿で作成した投稿タイプ
        );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
        ?>
        <a href="<?php the_permalink(); ?>">
        <div class="member-container"> 
            <div class="member-img"><?php the_post_thumbnail(); ?></div>
            <p class="member-name fs-20px"><?php the_title();?></p>
            <p><?php the_excerpt(); ?></p>
        </div>
        </a>
        <?php endforeach; ?>
        <?php else : //記事が無い場合 ?>
        <p>メンバーがいません。</p>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット ?>
    </div>
</div>
<?php get_footer(); ?>
