<?php
/**
 * Plugin Name: 1) Hello world
 * Description: Our first Gutenberg block
 */

defined( 'ABSPATH') || exit;

function gutenberg_boilerplate_block() {

    wp_register_script(
        'gutenberg-boilerplate-es5-step01',
        plugins_url('block.js',__FILE__),
        array('wp-blocks','wp-element')
    );

    register_block_type('gutenberg-boilerplate-es5/hello-world-step-01', array(
        'editor_script' => 'gutenberg-boilerplate-es5-step01',
    ));
    
}

add_action('init', 'gutenberg_boilerplate_block');