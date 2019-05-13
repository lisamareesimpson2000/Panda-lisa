<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h2 class="card-title"><?php the_title();?></h2>
                <p><?php the_time('F j, Y');?></p>
                <div class="content">
                    <?php the_excerpt() ?>
                </div>
        <a class="btn btn-warning" href="<?php the_permalink(); ?>"> View Audi</a>
        </div>
    </div>
</div>