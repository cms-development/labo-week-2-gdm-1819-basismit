<?php /* Template Name: No sidebar */ ?>
custom

<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post();?>
<h1><?php the_title();?></h1>
<div>
<?php the_content(); ?>
</div>
<?php endwhile; ?>
<!-- <?php wp_reset_postdata(); ?> -->
<?php else : ?>
<?php endif; ?>
<?php get_footer(); ?>
