<?php
/*
Template Name: SINGLE_MEMBER
*/
?>
<?php get_header(); ?>
<div class="main main_wrap flex">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-thumb-sp">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                </div>
                <div class="member-content-container">
                    <div class="single-name fs-32px"><?php the_title(); ?></div>
                    <div class="member-single-text"><?php the_content();?></div>
                    <div class="member-single-tag"><?php the_tags(); ?></div>
                    <div class="member-single-tag">
                        <?php $terms = get_the_terms($post->ID,'members_category');
                            if($terms){
                                foreach( $terms as $term ) {
                                    echo '<p>';
                                    echo '#'.$term->name.' ';
                                    echo '</p>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="single-thumb">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
</div>
<?php get_footer(); ?>