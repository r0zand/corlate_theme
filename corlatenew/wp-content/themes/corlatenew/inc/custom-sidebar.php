<?php 
/*
 * Function Name: my_register_sidebars
 * Creating Custom Sidebars 
*/
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'my-sidebar',
            'name'          => __( 'sidebar1' ),
            'description'   => __( '1st sidebar for posts' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );

    register_sidebar(
        array(
            'id'            => 'my-sidebar2',
            'name'          => __( 'sidebar2' ),
            'description'   => __( '2nd sidebar for products' ),
            'before_widget' => '<div class="widget search">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
}