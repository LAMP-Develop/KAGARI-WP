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
function add_rss_thumbnail($content)
{
    if (has_post_thumbnail() === true) {
        global $post;
        $content = '<p>'.get_the_post_thumbnail($post->ID, 'large').'</p>'.$content;
    }
    return $content;
}
add_filter('the_excerpt_rss', 'add_rss_thumbnail');

// ページネーション
function pagination($pages = '', $range = 1)
{
    $showitems = ($range * 2)+1;
    $text_before = '<i class="fas fa-angle-left"></i>';
    $text_next = '<i class="fas fa-angle-right"></i>';
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo '<ul class="pagination justify-content-center mb-0 mt-4">'."\n";
        if ($paged > 1 && $showitems < $pages) {
            echo '<li class="page-item">'."<a class=\"page-link\" href='".get_pagenum_link($paged - 1)."'>{$text_before}</a></li>";
        }
        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)) {
                echo ($paged == $i)?
                '<li class="page-item disabled"><span class="page-link">'.$i.'</span></li>'."\n":
                '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($i).'">'.$i.'</a></li>'."\n";
            }
        }
        if ($paged < $pages && $showitems < $pages) {
            echo '<li class="page-item">'."<a class=\"page-link\" href=\"".get_pagenum_link($paged + 1)."\">{$text_next}</a></li>";
        }
        echo '</ul>'."\n";
    }
}

// ブログカード
function nlink_scode($atts)
{
    $nlink = '';
    extract(shortcode_atts([
        'url' => ''
    ], $atts));

    $id = url_to_postid($url);

    if (empty($title)) {
        $title = esc_html(get_the_title($id));
    }

    if (has_post_thumbnail($id)) {
        $img = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'thumbnail');
        $img_tag = "<img src='".$img[0]."' alt='{$title}' width=".$img[1]." height=".$img[2].">";
    }
    $nlink .='
<div class="blog-card">
<a href="'.$url.'" target="_blank">
<div class="blog-card-thumbnail">'.$img_tag.'</div>
<div class="blog-card-content"><p>'.$title.'</p></div>
<span class="clear"></span>
</a>
</div>';

    return $nlink;
}
add_shortcode('nlink', 'nlink_scode');
