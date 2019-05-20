<?php
function mytheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here. $wp_customize is an important variable.
    $wp_customize->add_section( 'custom_theme_colour_section' , array(
        'title'      => __( 'Colours', '18wdwu07PandaLS' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'custom_background_colour_setting' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_background_control', array(
        'label'      => __( 'Background Colour', '18wdwu07PandaLS' ),
        'section'    => 'custom_theme_colour_section',
        'settings'   => 'custom_background_colour_setting',
    ) ) );

    // section 2 - header colour
    $wp_customize->add_section( 'custom_theme_header_colour_section' , array(
        'title'      => __( 'Header Colour', '18wdwu07PandaLS' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'custom_header_colour_setting' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_header_control', array(
        'label'      => __( 'Header Color', '18wdwu07PandaLS' ),
        'section'    => 'custom_theme_header_colour_section',
        'settings'   => 'custom_header_colour_setting',
    ) ) );

    //section 3 - widget layout
    $wp_customize->add_section( 'layout_section' , array(
        'title'      => __( 'Layout section', '18wdwu07PandaLS' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'sidebar_position' , array(
        'default'   => 'right',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_sidebar_control', array(
        'label'      => __( 'Sidebar Position', '18wdwu07PandaLS' ),
        'section'    => 'layout_section',
        'settings'   => 'sidebar_position',
        'type' => 'radio',
        'choices' => array(
            'left' => 'Left Side',
            'right' => 'Right Side',
        )
    ) ) );

        //section 4 - image
        $wp_customize->add_section( 'custom_image_section' , array(
            'title'      => __( 'Image Section', '18wdwu07PandaLS' ),
            'priority'   => 30,
        ) );
    
        $wp_customize->add_setting( 'custom_image_setting' , array(
            'default'   => 'image',
            'transport' => 'refresh',
        ) );
        
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'image',
                array(
                    'label'      => __( 'Upload a image', 'Panda Theme' ), //theme_name
                    'section'    => 'custom_image_section',
                    'settings'   => 'custom_image_setting',
                )
            )
        );

        //section 5 - image background
        $wp_customize->add_section( 'custom_background_image_section' , array(
            'title'      => __( 'Background Image', '18wdwu07PandaLS' ),
            'priority'   => 30,
        ) );
    
        $wp_customize->add_setting( 'custom_background_image_setting' , array(
            'default'   => 'background image',
            'transport' => 'refresh',
        ) );
        
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'backgroundimage',
                array(
                    'label'      => __( 'Upload a background image', 'Panda Theme' ), //theme_name
                    'section'    => 'custom_background_image_section',
                    'settings'   => 'custom_background_image_setting',
                )
            )
        );
    

 }
 add_action( 'customize_register', 'mytheme_customize_register' );

 function mytheme_customize_css()
{

    ?>
         <style type="text/css">
             body { 
                 /* checking is there is a modificaton called custom_background_colour_setting. get_theme_mod() can be used anywhere */
                 background-color: <?php echo get_theme_mod('custom_background_colour_setting', '#000000'); ?>; 
                 /* background-image: <?php echo get_theme_mod('custom_background_image_setting');?>; */
                }
                .navColour {
                    background-color: <?php echo get_theme_mod('custom_header_colour_setting', '#000000'); ?>; 
                }
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');