<?php get_header(); ?>
page
<?php if(have_posts()) : while (have_posts()) : the_post();?>
<?php echo _e('dit is een custom post');?>
<h1><?php the_title();?></h1>
<div>
<?php the_content(); ?>
</div>
<?php endwhile; ?>
<!-- <?php wp_reset_postdata(); ?> -->
<?php else : ?>
<?php endif; ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
