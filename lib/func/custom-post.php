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
    'help',
      array(
        'label' => 'ヘルプ',
        'labels' => array(
           'all_items' => 'ヘルプ一覧',
           ),
        'description' => 'お客様用ヘルプ',
        'public' => true,
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true
      )
    );
    register_taxonomy(
      'help_cat',
      'help',
      array(
        'label' => 'カテゴリー',
        'labels' => array(
          'all_items' => 'カテゴリー一覧',
          'add_new_item' => 'カテゴリーを追加'
        ),
        'rewrite' => array('slug' => 'help'),
        'with_front' => false,
        'hierarchical' => true,
        'show_in_rest' => true
      )
    );
    register_taxonomy(
      'help_tag',
      'help',
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
        'description' => '導入事例用',
        'public' => true,
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true
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
    register_taxonomy(
      'works_tag',
      'works',
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
