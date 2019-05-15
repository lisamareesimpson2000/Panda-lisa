<?php
//nothing below this will run.
// die('this is from custom post types');

function add_event_post_type(){



    $args = array(
        'labels' => array(
            $labels = array(
                'name'               => _x( 'Events', 'post type general name', '18wdwu07PandaLS' ),
                'singular_name'      => _x( 'Event', 'post type singular name', '18wdwu07PandaLS' ),
                'menu_name'          => _x( 'Events', 'admin menu', '18wdwu07PandaLS' ),
                'name_admin_bar'     => _x( 'Event', 'add new on admin bar', '18wdwu07PandaLS' ),
                'add_new'            => _x( 'Add New', 'event', '18wdwu07PandaLS' ),
                'add_new_item'       => __( 'Add New Event', '18wdwu07PandaLS' ),
                'new_item'           => __( 'New Event', '18wdwu07PandaLS' ),
                'edit_item'          => __( 'Edit Event', '18wdwu07PandaLS' ),
                'view_item'          => __( 'View Event', '18wdwu07PandaLS' ),
                'all_items'          => __( 'All Events', '18wdwu07PandaLS' ),
                'search_items'       => __( 'Search Events', '18wdwu07PandaLS' ),
                'parent_item_colon'  => __( 'Parent Events:', '18wdwu07PandaLS' ),
                'not_found'          => __( 'No events found.', '18wdwu07PandaLS' ),
                'not_found_in_trash' => __( 'No events found in Trash.', '18wdwu07PandaLS' )
            );

            $args =array(
                'labels' => $labels,
                'description' => 'A list of events which will be held',
                'public' => true,
                'show_in_nav_menus' => false
                'menu_position' => 6,
                'menu_icon'=> 'dashboard-tickets',
                'support' => 'thumbnail'
                
            );
        )

    )


    register_post_type('event', $args);

}
add_action('init', 'add_event_post_type');

 