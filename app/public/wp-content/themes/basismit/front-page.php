<?php get_header(); 
    $mostRecent = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 2, 
    'orderby' => 'date',
    'order' => 'DESC'
    ));

    $blogs = new WP_Query( array(
    'post_type' => 'post'
    ));

    $tips = new WP_Query( array(
        'category_name' => 'weetjes', 
        'posts_per_page' => 2 
    ));
?>
<main class="container">
    <div class="row">
    <div class="col s6">
            <h3>
                <?php echo _e('Blog');?>
            </h3>
            <div class="content card">
                <div>
                    <ul class="collection">
                        <?php if($blogs->have_posts()) : while ($blogs->have_posts()) : $blogs->the_post();?>
                        <li class="collection-item">
                        <?php the_title( '<h5><a href="' . esc_url( get_permalink() ) . '">', '</a></h5>' );?>
                        <?php the_content('<p>','</p>'); ?>
                        </li>
                        <?php endwhile;
                            else : 
                            endif; 
                            wp_reset_postdata(); 
                        ?>
                        </ul>
                </div>
            </div>
        </div>
        <div class="col s6">
            <h3>
                <?php echo _e('Meest recent');?>
            </h3>
            <div class="content card">
                <div>
                    <ul class="collection">
                        <?php if($mostRecent->have_posts()) : while ($mostRecent->have_posts()) : $mostRecent->the_post();?>
                        <li class="collection-item">
                        <?php the_title( '<h5><a href="' . esc_url( get_permalink() ) . '">', '</a></h5>' );?>
                        <?php the_content('<p>','</p>'); ?>
                        </li>
                        <?php endwhile;
                            else : 
                            endif; 
                            wp_reset_postdata(); 
                        ?>
                        </ul>
                </div>
            </div>
        </div>
        <div class="col s6">
            <h3>
                <?php echo _e('Weetjes');?>
            </h3>
            <div class="content card">
                <div>
                    <ul class="collection">
                        <?php if($tips->have_posts()) : while ($tips->have_posts()) : $tips->the_post();?>
                        <li class="collection-item">
                        <?php the_title( '<h5><a href="' . esc_url( get_permalink() ) . '">', '</a></h5>' );?>
                        <?php the_content('<p>','</p>'); ?>
                        </li>
                        <?php endwhile;
                            else : 
                            endif; 
                            wp_reset_postdata(); 
                        ?>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>