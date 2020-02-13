<?php

// カスタム投稿
function create_post_type()
{
    $supports = [
        'title',
        'editor',
        'thumbnail',
        'revisions',
        'custom-fields'
    ];
    register_post_type(
        'campaign',
        array(
        'label' => 'キャンペーン',
        'labels' => array(
           'all_items' => 'キャンペーン一覧',
           ),
        'description' => '',
        'public' => true,
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true,
        'menu_position' => 5
      )
    );
    register_post_type(
        'seminar',
        array(
        'label' => 'セミナー',
        'labels' => array(
           'all_items' => 'セミナー一覧',
           ),
        'description' => '企業のWEB担当者様に向けて、<br class="d-md-block d-none">セミナーを実施しております。',
        'public' => true,
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true,
        'menu_position' => 5
      )
    );
    register_post_type(
        'news',
        array(
        'label' => 'お知らせ',
        'labels' => array(
           'all_items' => 'お知らせ一覧',
           ),
        'description' => 'KAGARIからのお知らせ一覧',
        'public' => true,
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true,
        'menu_position' => 5
      )
    );
    register_taxonomy(
        'news_cat',
        'news',
        array(
        'label' => 'カテゴリー',
        'labels' => array(
          'all_items' => 'カテゴリー一覧',
          'add_new_item' => 'カテゴリーを追加'
        ),
        'rewrite' => array('slug' => 'news'),
        'with_front' => false,
        'hierarchical' => true,
        'show_in_rest' => true
      )
    );
    register_taxonomy(
        'news_tag',
        'news',
        array(
        'label' => 'タグ',
        'labels' => array(
          'all_items' => 'タグ一覧',
          'add_new_item' => 'タグを追加'
        ),
        'hierarchical' => false,
        'show_in_rest' => true
      )
    );
    register_post_type(
        'works',
        array(
        'label' => '導入事例',
        'labels' => array(
           'all_items' => '導入事例一覧',
           ),
        'description' => '導入事例',
        'public' => true,
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true,
        'menu_position' => 5
      )
    );
    register_taxonomy(
        'works_cat',
        'works',
        array(
        'label' => 'カテゴリー',
        'labels' => array(
          'all_items' => 'カテゴリー一覧',
          'add_new_item' => 'カテゴリーを追加'
        ),
        'rewrite' => array('slug' => 'works'),
        'with_front' => false,
        'hierarchical' => true,
        'show_in_rest' => true
      )
    );
    register_post_type(
        'faq',
        array(
        'label' => 'よくあるご質問',
        'labels' => array(
           'all_items' => 'よくあるご質問一覧',
           ),
        'description' => 'よくあるご質問',
        'public' => true,
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true,
        'menu_position' => 5
      )
    );
    register_taxonomy(
        'faq_cat',
        'faq',
        array(
        'label' => 'カテゴリー',
        'labels' => array(
          'all_items' => 'カテゴリー一覧',
          'add_new_item' => 'カテゴリーを追加'
        ),
        'rewrite' => array('slug' => 'faq'),
        'with_front' => false,
        'hierarchical' => true,
        'show_in_rest' => true
      )
    );
    flush_rewrite_rules(false);
}
add_action('init', 'create_post_type');


function my_type_link($link, $post)
{
    if ('faq' === $post->post_type) {
        // カスタム投稿名/ターム/にする
        $term = wp_get_post_terms($post->ID, 'faq_cat');
        if (!empty($term)) {
            return home_url('/faq/'.$term[0]->slug.'/'.$post->ID);
        }
    } else {
        return $link;
    }
}
add_filter('post_type_link', 'my_type_link', 1, 2);

function my_rewrite_rules_array($rules)
{
    $new_rules = array(
        //個別記事
        'faq/(.+?)/([0-9]+)$' => 'index.php?post_type=faq&p=$matches[2]',
        //アーカイブ
        'faq/([^/]+)(?:/([0-9]+))?/?$' => 'index.php?faq_cat=$matches[1]&paged=$matches[2]',
    );
    return $new_rules+$rules;
}
add_filter('rewrite_rules_array', 'my_rewrite_rules_array');

function change_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if (is_post_type_archive('faq') || $query -> is_tax('faq_cat')) {
            $query->set('posts_per_page', 100);
        }
    }
    return $query;
}
add_action('pre_get_posts', 'change_posts_per_page');
