<?php

// スマホ判定
function is_mobile()
{
    $useragents = array('iPhone','iPod','Android','dream','CUPCAKE','blackberry9500','blackberry9530','blackberry9520','blackberry9550','blackberry9800','webOS','incognito','webmate');
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// 記事一覧アイキャッチ表示
function customize_manage_posts_columns($columns)
{
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
add_filter('manage_posts_columns', 'customize_manage_posts_columns');
function customize_manage_posts_custom_column($column_name, $post_id)
{
    if ('thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'thumbnail', array('style'=>'width:100px;height:auto'));
    }
    if (isset($thum) && $thum) {
        echo $thum;
    }
}
add_action('manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2);

// RSSにアイキャッチ含める
function insert_thumbnail_element_to_feed()
{
    global $post;
    if (!has_post_thumbnail($post->ID)) {
        return;
    }
    $thumbnail_ID = get_post_thumbnail_id($post->ID);
    $thumbnail = wp_get_attachment_image_src($thumbnail_ID, 'large');
    $output = '<media:content xmlns:media="http://search.yahoo.com/mrss/" medium="image" type="image/jpeg"';
    $output .= ' url="'. $thumbnail[0] .'"';
    $output .= ' width="'. $thumbnail[1] .'"';
    $output .= ' height="'. $thumbnail[2] .'"';
    $output .= ' />';
    echo $output;
}
add_action('rss2_item', 'insert_thumbnail_element_to_feed');
