<?php
/**
 * Plugin Name: 3) Save data
 * Description: Our first Gutenberg block
 */

defined( 'ABSPATH') || exit;

function gutenberg_boilerplate_block_save() {

    wp_register_script(
        'gutenberg-boilerplate-es5-step03',
        plugins_url('block.js',__FILE__),
        array('wp-blocks','wp-element')
    );

    register_block_type('gutenberg-boilerplate-es5/hello-world-step-03', array(
        'editor_script' => 'gutenberg-boilerplate-es5-step03',
    ));
    
}

add_action('init', 'gutenberg_boilerplate_block_save');