<?php get_header(); ?>
single
<div class="container">
    <div class="row">
        <div class="col-9"></div>
        <div class="col-3">
            <?php get_sidebar(); ?>
        </div>
        <?php if(have_posts()) : while (have_posts()) : the_post();?>
        <h1>
            <?php the_title();?>
        </h1>
        <div>
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
        <!-- <?php wp_reset_postdata(); ?> -->
        <?php else : ?>
        <?php endif; ?>
    </div>

</div>
<?php get_footer(); ?>