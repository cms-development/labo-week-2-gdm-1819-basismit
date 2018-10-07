<?php get_header(); ?>
<main class="container">
    <div class="row">
        <div class="col s8">
            <div class="content card">
                <div>
                    <h3 style="padding-left: 20px; margin:0;"> 
                        <?php echo _e('Recipes:');?>
                    </h3>
                    <ul class="collection">
                        <?php if(have_posts()) : while (have_posts()) : the_post();?>
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
        <div class="col s4">
            <div class="side card">
                <div class="card-content">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>