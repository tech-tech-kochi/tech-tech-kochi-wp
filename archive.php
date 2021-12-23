<?php get_header(); ?>
<div class="main">
    <div class="page-title-container">
        <p class="page-title fs-32px">NEWS</p>
    </div>
    <div class="ar-news-content-container">
        <?php
        global $post;
        $args = array( 'posts_per_page' => 8 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) {
        setup_postdata($post);
        ?>
        <div class="news-container">
            <div class="news-wrapper clearfix flex">
                <div class="news-category-date">
                    <div class="news-category"><?php the_category() ?></div>
                    <div class="news-date"><?php the_time('Y年m月d日'); ?></div>
                </div>
                <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
            </div>
        </div>
        <?php
        }
        wp_reset_postdata();
        ?> 
    </div>
</div>
<?php get_footer(); ?>
