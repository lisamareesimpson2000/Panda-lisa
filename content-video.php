<?php if(is_singular() ):?>

<div class="row">
    <div class="col-12">
        <p>This is a video post</p>
    </div>
</div>
<?php else:?>


<!-- The file name content-video.php if there are anty videos it will look for this file. -->
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h2 class="card-title"><?php the_title();?></h2>
                <p><?php the_time('F j, Y');?></p>
                <div class="content">
                    <?php the_excerpt() ?>
                </div>
        <a class="btn btn-primary" href="<?php the_permalink(); ?>"> View Video</a>
        </div>
    </div>
</div>


    <p>This is a thumbnail post</p>
<?php endif;?>