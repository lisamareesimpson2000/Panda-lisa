
<!-- from front-page.php this was in a if else statement (it was going to turn into a giant if else statement- hard to read). I've posted this here so I can seperate out files so it's easier to read -->
<div class="card">

    <?php if ( has_post_thumbnail() ):?>
        <?php the_post_thumbnail('medium' , ['class' => 'card-img-top', 'alt => thumbnail image for the post']); //img-fluid?>
    <?php endif;?>


        <div class="card-body">
        <h2 class="card-title"><?php the_title();?></h2>
            <p><?php //the_time('F j, Y');?></p>
            <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
            <div class="content">
                <?php the_excerpt() ?>
            </div>

            <?php if ( has_post_format( 'video' )): ?>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>"> View Video</a>

            <?php elseif(has_post_format( 'image' )): ?>
            <a class="btn btn-info" href="<?php the_permalink(); ?>"> View Image</a>

            <?php elseif(has_post_format( 'audio' )): ?>
            <a class="btn btn-warning" href="<?php the_permalink(); ?>"> Listen to Audio</a>

            <?php else: ?>
            <a class="btn btn-secondary" href="<?php the_permalink(); ?>"> View Post</a>
            <?php endif; ?>

            <hr>
        </div>
    </div>
</div>