<?php
//管理者メニュー
function remove_menus(){
  global $menu;
  unset($menu[5]);
}
add_action('admin_menu', 'remove_menus');

//お知らせ
add_action('init', 'create_post_type');
function create_post_type(){
  register_post_type( 'news',
    array(
      'label'       => 'お知らせ',
      'public'      => true,
      'has_archive' => true,
      'taxonomies'  => array( 'category', 'post_tag' ),
      'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'trackbacks' ),
    )
  );
  register_post_type('un_news',
    array(
      'label' => 'ユニットハウス お知らせ',
      'public' => true,
      'has_archive' => true,
      'rewrite' => array(
        'single' => 'menu',
        'with_front' => false
      )
    )
  );
  register_post_type('pm_news',
    array(
      'label' => 'アタッチメント お知らせ',
      'public' => true,
      'has_archive' => true,
      'rewrite' => array(
        'single' => 'menu',
        'with_front' => false
      )
    )
  );
  register_post_type('bt_news',
    array(
      'label' => '高所他 お知らせ',
      'public' => true,
      'has_archive' => true,
      'rewrite' => array(
        'single' => 'menu',
        'with_front' => false
      )
    )
  );

  register_taxonomy(
    'news_cat',
    'news',
    array(
      'label' => 'お知らせカテゴリ',
      'labels' => '一覧',
      'add_new_item' => '追加',
      'hierarchical' => true,
      'rewrite' => array( 
        'single' => 'menu/category',
        'with_front' => false
      ),
      'public' => true,
      'show_ui' => true
    )
  );
}

