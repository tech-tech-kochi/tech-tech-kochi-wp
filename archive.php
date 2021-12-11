<?php get_header(); ?>
<div class="main">
    <div class="page-title-container">
        <p class="page-title fc-wht fs-32px">NEWS</p>
    </div>
    お知らせ
    <?php
    global $post;
    $args = array( 'posts_per_page' => 8 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) {
    setup_postdata($post);
    ?>
    <div class="item">
    <div class="img">
        <?php the_post_thumbnail('index_thumbnail'); ?>
    </div>
    <div class="title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="time">
        <?php the_time('Y.m.d') ?>    
    </div>
    <div class="category">
        <?php the_category(',') ?>
    </div>
    </div>
    <?php
    }
    wp_reset_postdata();
    ?> 
</div>
<?php get_footer(); ?>
