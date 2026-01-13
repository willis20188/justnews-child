<?php
/**
 * JuestNews Child Theme functions
 */

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'juestnews-child-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}, 20 );

