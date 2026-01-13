<?php
/**
 * NewsJust Child Theme functions
 */

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'newsjust-child-style',
        get_stylesheet_uri(),
        [ 'newsjust-style' ],
        wp_get_theme()->get('Version')
    );
});
