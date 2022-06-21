<?php

add_action('init', 'register_image_sizes');

function register_image_sizes(){
    remove_image_size( 'thumbnail' );
    remove_image_size( 'medium' );
    remove_image_size( 'medium_large' );
    remove_image_size( 'large' );

    add_image_size( 'small-square', 150, 150, true );
    add_image_size( 'medium-square', 300, 300, true );
    add_image_size( 'large-square', 800, 800, true );

    add_image_size( 'small-rectangle', 225, 150, true );
    add_image_size( 'medium-rectangle', 450, 300, true );
    add_image_size( 'large-rectangle', 1140, 800, true );

    add_image_size( 'small-wide', 300, 150, true );
    add_image_size( 'medium-wide', 600, 300, true );
    add_image_size( 'large-wide', 1140, 600, true );

    add_image_size( 'small-vertical-rectangle', 125, 250, true );
    add_image_size( 'medium-vertical-rectangle', 250, 500, true );
    add_image_size( 'large-vertical-rectangle', 375, 750, true );

}