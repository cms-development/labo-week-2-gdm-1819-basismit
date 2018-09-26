<?php get_header(); ?>
front
<?php 
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
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1><?php echo _e('Blog');?></h1>
        </div>
        <div class="col-12">
            <div class="row align-items-center">
                <?php if($blogs->have_posts()) : while ($blogs->have_posts()) : $blogs->the_post();?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <?php the_title( '<h3 class="card-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );?>
                            <?php the_content('<div class="card-text>','</div>'); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                else : 
                endif; 
                wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-12">
        <h1><?php echo _e('Meest recent');?></h1>
        </div>
        <div class="col-12">
            <div class="row align-items-center">
            <?php if($mostRecent->have_posts()) : while ($mostRecent->have_posts()) : $mostRecent->the_post();?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <?php the_title( '<h3 class="card-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );?>
                            <?php the_content('<div class="card-text>','</div>'); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                else : 
                endif; 
                wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-12">
    <h1><?php echo _e('Weetjes');?></h1>
        </div>
        <div class="col-12">
            <div class="row align-items-center">
            <?php if($tips->have_posts()) : while ($tips->have_posts()) : $tips->the_post();?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <?php the_title( '<h3 class="card-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );?>
                            <?php the_content('<div class="card-text>','</div>'); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                else : 
                endif; 
                wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
