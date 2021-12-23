<?php get_header(); ?>
<main class="main">
    <div class="page-title-container">  
        <h1 class="page-title fs-32px">MEMBER</h1>
    </div>
    <div class="content ar-member-content-container flex">
        <?php $args = array(
        'post_type' => 'member', //カスタム投稿で作成した投稿タイプ
        'posts_per_page' => -1,
        );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
        ?>
        <a href="<?php the_permalink(); ?>">
        <div class="member-container"> 
            <div class="member-img"><?php the_post_thumbnail(); ?></div>
            <p class="member-name fs-20px"><?php the_title();?></p>
            <p><?php the_category(); ?></p>
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
