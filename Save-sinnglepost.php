
    <div class="row">
        <?php if (has_post_thumbnail()):?>
            <div class="col-12 col-sm-6" >
                <!-- gives you the image tag below -->
                <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top img-fluid', 'alt' => ' this is the featured image']); ?>


            </div>
                <!-- two different ways how to do this, first one doesn't have clsing div tage so will fail in validator-->
                <!-- <div class="col-12 col-sm-6" > -->
                <?php $columnClasses = 'col-12 col-md-6' ?>
            <?php else: ?>
                <!-- <div class="col-12" > -->
                <?php $columnClasses = 'col-12' ?>
            <?php endif;?>

            <div class="col-12 col-sm-6">

            <div class="content">
                <?php the_content(); ?>
            </div>
            <hr>
    </div>
    </div>