<?php get_header(); ?>
<p>This is from front-page.php</p>
<?php if( have_posts() ):?>
<div class="card-deck">
    <?php while( have_posts() ): the_post();?>
    
    <?php get_template_part( 'content', get_post_format()); ?>





    <?php endwhile; ?>
<?php else: ?>
<p>There is no post</p>
<?php endif;?>

<?php get_footer(); ?>