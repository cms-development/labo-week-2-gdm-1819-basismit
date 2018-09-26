<?php get_header(); ?>
archive
<div class="container">
    <div class="row">
        <div class="col-9">
        <div class="row">
        <div class="col-12">
            <h1><?php echo _e('Blogs');?></h1>
        </div>
        <div class="col-12">
            <div class="row align-items-center">
                <?php if(have_posts()) : while (have_posts()) : the_post();?>
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
<div class="col-3">
    <?php get_sidebar(); ?>
</div>
    </div>
</div>
<?php get_footer(); ?>
