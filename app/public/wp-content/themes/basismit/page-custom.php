<?php get_header(); ?>
<main class="container">
    <div class="row">
        <div class="col s12">
            <div class="content card">
                <div class="card-content">
                    <?php if(have_posts()) : while (have_posts()) : the_post();?>
                    <h3>
                        <?php the_title();?>
                    </h3>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                    <!-- <?php wp_reset_postdata(); ?> -->
                    <?php else : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>