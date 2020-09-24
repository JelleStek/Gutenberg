<?php
/**
 * Plugin Name: 2) External style sheets
 * Description: Load external CSS
 */

defined( 'ABSPATH') || exit;

function css_block() {

    wp_register_script(
        'css-block',
        plugins_url('block.js',__FILE__),
        array('wp-blocks','wp-element'),
        filemtime( plugin_dir_path(__FILE__) . 'editor.css'),
        true
    );

    // styles
    wp_register_style(
        'css-profile-block-editor-style',
        plugins_url('editor.css',__FILE__),
        filemtime( plugin_dir_path(__FILE__) . 'editor.css')
    );

    wp_register_style(
        'css-profile-block-frontend-style',
        plugins_url('style.css',__FILE__),
        filemtime( plugin_dir_path(__FILE__) . 'style.css')
    );

    register_block_type('css-block/css-block-step-02', array(
        'editor_script' => 'css-block',
        'editor_style'    => 'css-profile-block-editor-style',
        'style'         => 'css-profile-block-frontend-style',
    ));
    
}

add_action('init', 'css_block');