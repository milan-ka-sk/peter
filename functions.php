<?php 

//front page page IDs

$frontPageIDs = array(
    'design' => 20,
    'architektura' => 15
);

function features() {
    add_theme_support( 'post-thumbnails' ); 
    
    // setup image sizes in backend -- settings / media
    // thumbnail: 200x140
    // medium: 900x900
    // large: 1200x1200
    
    // other alternative:
    // add_image_size( 'thumb-small', 100, 70, true );
    // add_image_size( 'thumb-medium', 200, 140, true );
    // add_image_size( 'full-medium', 900);
    // add_image_size( 'full-large', 1200);
    // use regenerate thumbnails plugin if u want to resize images retroactively
    // use manual image crop plugin to adjust the images better for the cropping
}

add_action('after_setup_theme', features);


function styles(){
    wp_enqueue_style('main_styles', get_stylesheet_uri(), array(),   filemtime(get_template_directory()), false);
}
add_action('wp_enqueue_scripts', 'styles');

?>