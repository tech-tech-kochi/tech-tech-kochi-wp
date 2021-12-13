<style>
    .content-container {
        width: 60%;
        margin: 100px auto;
    }
    .single-post-container {
        margin: 50px 0;
    }
    .date-box {
        margin-right: 20px;
    }
    .title-box {
        margin-top: 10px;
    }
</style>
<?php get_header(); ?>
<div class="main">
    <div class="page-title-container">
        <p class="page-title fc-wht fs-32px">NEWS</p>
    </div>
    <div class="content-container">
        <?php
        global $post;
        $args = array( 'posts_per_page' => 8 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) {
        setup_postdata($post);
        ?>
        <div class="single-post-container">
            <div class="flex">
                <div class="date-box">
                    <?php the_time('Y.m.d') ?>    
                </div>
                <div class="category-box fs-14px">
                    <?php the_category(',') ?>
                </div>
            </div>
            <div class="title-box">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        </div>
        <?php
        }
        wp_reset_postdata();
        ?> 
    </div>
</div>
<?php get_footer(); ?>
