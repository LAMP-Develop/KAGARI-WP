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
    'seminar',
      array(
        'label' => 'セミナー',
        'labels' => array(
           'all_items' => 'セミナー一覧',
           ),
        'description' => 'セミナー',
        'public' => true,
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true,
        'menu_position' => 5
      )
    );
    register_taxonomy(
      'seminar_cat',
      'seminar',
      array(
        'label' => 'カテゴリー',
        'labels' => array(
          'all_items' => 'カテゴリー一覧',
          'add_new_item' => 'カテゴリーを追加'
        ),
        'rewrite' => array('slug' => 'seminar'),
        'with_front' => false,
        'hierarchical' => true,
        'show_in_rest' => true
      )
    );
    register_taxonomy(
      'seminar_tag',
      'seminar',
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
    'news',
      array(
        'label' => 'お知らせ',
        'labels' => array(
           'all_items' => 'お知らせ一覧',
           ),
        'description' => 'お知らせ',
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
    flush_rewrite_rules(false);
}
add_action('init', 'create_post_type');
