<?php get_header(); ?>

<?php if( have_posts() ):?>
    <?php while( have_posts() ): the_post();?>
    <div class="card">
        <h2><?php the_title();?></h2>
            <p><?php //the_time('F j, Y');?></p>
            <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
            <div class="content">
                <?php the_content(); ?>
            </div>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>"> View Post</a>
            <hr>
    </div>
    <?php endwhile; ?>
<?php /*else: */?>
<!-- <p>There is no post</p> -->
<?php endif;?>

    <!-- <h1>This is from the index.php</h1> -->

<?php get_footer(); ?>