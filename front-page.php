<?php get_header(); ?>
<p>This is from front-page.php</p>

<div class="row">
<?php if( have_posts() ):?>
    <div class="col">
        <div class="card-deck">
            <?php while( have_posts() ): the_post();?>
            <?php get_template_part( 'content', get_post_format()); ?>
    <?php endwhile; ?>
        </div>
    </div>
                    <?php /*else:*/ ?>          
                    <!-- <p>There is no post</p> -->
<?php endif;?>

    <?php if (is_active_sidebar('sidebar-1')):?>
        <div class="col-3">
            <div class="card bg-light p-3">
                <ul class="widget_calendar">
                    <?php dynamic_sidebar('sidebar-1');?>
                    <?php unregister_widget( $widget_class ) ?>
                </ul>
                
            </div>
        
        </div>  
    <?php endif;?>


</div> 


<!-- Adding the next two events and staff -->
<?php
// require get_template_directory() . '/events-template.php';
            $args = array(
                'post_type' => 'event',
                'posts_per_page' => 2 //-1 give me everything. 0 means give me 1. 
                //'order' => 'ASC',
                //'orderby' => 'date'
            );
            $allEvents = new WP_Query($args);
         ?>









<?php get_footer(); ?>