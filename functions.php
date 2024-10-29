<?php





// register_nav_menus(
//     array ('primary-menu' => 'Header Menu'), 
//     ('form-menu' => 'forem')
    
// );

register_nav_menus( array(
    'primary-menu' => __( 'Header Menu'  ),
    'form-menu'    => __( 'Form Menu'  ),
) );

add_theme_support( 'custom-logo',
 array(
    'width' => 54,
    'height' => 54
 )
 );





