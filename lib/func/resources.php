<?php

// CSSの管理
function twpp_enqueue_styles()
{
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri().'/lib/css/style.min.css',
        [],
        '1.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

// JSの管理
function add_my_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script(
        'base-script',
        get_template_directory_uri().'/lib/js/index.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

// JSタグ変更
function filter_attribute_to_script($tag, $handle, $src)
{
    $tag = '<script src="'.esc_url($src).'"></script>'."\n";
    return $tag;
}
add_filter('script_loader_tag', 'filter_attribute_to_script', 10, 3);
