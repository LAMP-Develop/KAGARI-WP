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
        'description' => 'ウェブマーケティング手法を探している方や<br class="d-md-block d-none">マーケティング支援事業者様に向けて、<br class="d-md-block d-none">セミナーを実施しております。',
        'public' => true,
        'has_archive' => true,
        'supports' => $supports,
        'show_in_rest' => true,
        'menu_position' => 5
      )
    );
    // register_taxonomy(
    //   'seminar_cat',
    //   'seminar',
    //   array(
    //     'label' => 'カテゴリー',
    //     'labels' => array(
    //       'all_items' => 'カテゴリー一覧',
    //       'add_new_item' => 'カテゴリーを追加'
    //     ),
    //     'rewrite' => array('slug' => 'seminar'),
    //     'with_front' => false,
    //     'hierarchical' => true,
    //     'show_in_rest' => true
    //   )
    // );
    // register_taxonomy(
    //   'seminar_tag',
    //   'seminar',
    //   array(
    //     'label' => 'タグ',
    //     'labels' => array(
    //       'all_items' => 'タグ一覧',
    //       'add_new_item' => 'タグを追加'
    //     ),
    //     'hierarchical' => false,
    //     'show_in_rest' => true
    //   )
    // );
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
