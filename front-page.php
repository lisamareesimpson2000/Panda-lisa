<?php get_header(); ?>
<p>This is from front-page.php</p>

<!-- <header><?php //echo get_theme_mod('custom_header_colour_setting');?></header> -->

<p><?php echo get_theme_mod('custom_image_setting');?></p>
<img src="<?php echo get_theme_mod('custom_image_setting');?>" alt="">

<p><?php echo get_theme_mod('sidebar_position'); //the setting is what we need to grab here?></p>
        <?php
            $side = get_theme_mod('sidebar_position');
            if($side === 'left'){
                $sidebarOrder = 'order-0';
                $contentorder = 'order-1';
            } else {
                $sidebarOrder = 'order-1';
                $contentorder = 'order-0';
            }
        ?>
<div class="row mb-5 d-flex">
<?php if( have_posts() ):?>
    <div class="col <?php echo $contentorder; ?>">
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
       
        <div class="col-3 <?php echo $sidebarOrder ?>">
            <div class="card bg-light p-3">
                <ul class="widget_calendar">
                    <?php dynamic_sidebar('sidebar-1');?>
                    <?php //unregister_widget( $widget_class ) ?>
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