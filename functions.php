<?php
//管理者メニュー
function remove_menus(){
  global $menu;
  unset($menu[5]);
}
add_action('admin_menu', 'remove_menus');

add_action('init', function(){
  //post お知らせ
  register_post_type('news',
    array(
      'labels'  => array(
        'name'  => 'お知らせ',
        'name_admin_bar'  => 'お知らせ',
        'singular_name'   => 'お知らせ',
			  'add_new' => '新規追加',
			  'add_new_item' => '新規追加',
			  'edit_item' => '情報を編集する',
			  'new_item' => '新規データ',
			  'all_items' => '一覧',
			  'view_item' => 'プレビューを見る',
			  'search_items' => '検索する',
			  'not_found' => 'データが見つかりませんでした。',
			  'not_found_in_trash' => 'ゴミ箱内にデータが見つかりませんでした。'
      ),
      'public'  => true,
      'has_archive' => true,
      'hierarchical'  => false,
      'capability_type' => 'post',
      'map_meta_cap'  => true,
      'delete_with_user'  => true, 
      'menu_position' => 3,
      'supports' => array( 'title', 'editor'),
      'taxonomies'  => array()
    )
  );
  //post 販売店
  register_post_type('shops',
    array(
      'labels'  => array(
        'name'  => '販売店',
        'name_admin_bar'  => '販売店',
        'singular_name'   => '販売店',
			  'add_new' => '新規追加',
			  'add_new_item' => '新規追加',
			  'edit_item' => '情報を編集する',
			  'new_item' => '新規データ',
			  'all_items' => '一覧',
			  'view_item' => 'プレビューを見る',
			  'search_items' => '検索する',
			  'not_found' => 'データが見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱内にデータが見つかりませんでした。',
        'enter_title_here' => '販売店の名称を入力'
      ),
      'public'  => true,
      'has_archive' => true,
      'hierarchical'  => false,
      'capability_type' => 'post',
      'map_meta_cap'  => true,
      'delete_with_user'  => true, 
      'menu_position' => 3,
      'supports' => array( 'title'),
      'taxonomies'  => array('pref_cat')
    )
  );
  //post ユニットハウス
  register_post_type('units',
    array(
      'labels'  => array(
        'name'  => 'ユニットハウス',
        'name_admin_bar'  => 'ユニットハウス',
        'singular_name'   => 'ユニットハウス',
			  'add_new' => '新規追加',
			  'add_new_item' => '新規追加',
			  'edit_item' => '情報を編集する',
			  'new_item' => '新規データ',
			  'all_items' => '一覧',
			  'view_item' => 'プレビューを見る',
			  'search_items' => '検索する',
			  'not_found' => 'データが見つかりませんでした。',
			  'not_found_in_trash' => 'ゴミ箱内にデータが見つかりませんでした。'
      ),
      'public'  => true,
      'has_archive' => true,
      'hierarchical'  => false,
      'capability_type' => 'post',
      'map_meta_cap'  => true,
      'delete_with_user'  => true, 
      'menu_position' => 3,
      'supports' => array( 'title'),
      'taxonomies'  => array()
    )
  );
  //post アタッチメント
  register_post_type('pms',
    array(
      'labels'  => array(
        'name'  => 'アタッチメント',
        'name_admin_bar'  => 'アタッチメント',
        'singular_name'   => 'アタッチメント',
			  'add_new' => '新規追加',
			  'add_new_item' => '新規追加',
			  'edit_item' => '情報を編集する',
			  'new_item' => '新規データ',
			  'all_items' => '一覧',
			  'view_item' => 'プレビューを見る',
			  'search_items' => '検索する',
			  'not_found' => 'データが見つかりませんでした。',
			  'not_found_in_trash' => 'ゴミ箱内にデータが見つかりませんでした。'
      ),
      'public'  => true,
      'has_archive' => true,
      'hierarchical'  => false,
      'capability_type' => 'post',
      'map_meta_cap'  => true,
      'delete_with_user'  => true, 
      'menu_position' => 3,
      'supports' => array( 'title'),
      'taxonomies'  => array()
    )
  );
  //post 高所作業車他
  register_post_type('bts',
    array(
      'labels'  => array(
        'name'  => '高所作業車他',
        'name_admin_bar'  => '高所作業車他',
        'singular_name'   => '高所作業車他',
			  'add_new' => '新規追加',
			  'add_new_item' => '新規追加',
			  'edit_item' => '情報を編集する',
			  'new_item' => '新規データ',
			  'all_items' => '一覧',
			  'view_item' => 'プレビューを見る',
			  'search_items' => '検索する',
			  'not_found' => 'データが見つかりませんでした。',
			  'not_found_in_trash' => 'ゴミ箱内にデータが見つかりませんでした。'
      ),
      'public'  => true,
      'has_archive' => true,
      'hierarchical'  => false,
      'capability_type' => 'post',
      'map_meta_cap'  => true,
      'delete_with_user'  => true, 
      'menu_position' => 3,
      'supports' => array( 'title'),
      'taxonomies'  => array()
    )
  );
  //taxonomy 事業分類
  register_taxonomy('products_cat', array('news'),
    array(
      'labels' => array(
        'name' => '事業分類',
        'singular_name'   => '事業分類',
      ),
      'public' => true,
      //'show_ui' => true,
      'hierarchical' => true
    )
  );   
  //taxonomy 都道府県
  register_taxonomy('pref_cat', array('shops','units','bts','pms'),
    array(
      'labels' => array(
        'name' => '都道府県',
        'singular_name'   => '都道府県',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 販売エリア
  //販売店で探す
  register_taxonomy('shop_sales_area_cat', array('shops','units','bts','pms'),
    array(
      'labels' => array(
        'name' => '販売エリア',
        'singular_name'   => '販売エリア',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 都道府県エリア
  //住所で探す
  register_taxonomy('shop_pref_area_cat', array('shops','units','bts','pms'),
    array(
      'labels' => array(
        'name' => '都道府県エリア',
        'singular_name'   => '都道府県エリア',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 状態
  //状態で探す
  register_taxonomy('status_cat', array('units','bts','pms'),
    array(
      'labels' => array(
        'name' => '状態で探す',
        'singular_name'   => '状態で探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 坪数で探す
  register_taxonomy('un_tubo_cat', array('units'),
    array(
      'labels' => array(
        'name' => '坪数で探す',
        'singular_name'   => '坪数で探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 用途で探す
  register_taxonomy('un_usage_cat', array('units'),
    array(
      'labels' => array(
        'name' => '用途で探す',
        'singular_name'   => '用途で探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 価格で探す
  register_taxonomy('un_price_range_cat', array('units'),
    array(
      'labels' => array(
        'name' => '価格で探す',
        'singular_name'   => '価格で探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 用途で探す アタッチメント
  register_taxonomy('pm_usage_cat', array('pms'),
    array(
      'labels' => array(
        'name' => '用途で探す',
        'singular_name'   => '用途で探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy クラスで探す アタッチメント
  register_taxonomy('pm_class_cat', array('pms'),
    array(
      'labels' => array(
        'name' => 'クラスで探す',
        'singular_name'   => 'クラスで探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 価格で探す アタッチメント
  register_taxonomy('pm_price_range_cat', array('pms'),
    array(
      'labels' => array(
        'name' => '価格で探す',
        'singular_name'   => '価格で探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 高さで探す 高所作業車他
  register_taxonomy('bt_height_cat', array('bts'),
    array(
      'labels' => array(
        'name' => '高さで探す',
        'singular_name'   => '高さで探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 分類で探す 高所作業車他
  register_taxonomy('bt_usage_cat', array('bts'),
    array(
      'labels' => array(
        'name' => '分類で探す',
        'singular_name'   => '分類で探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
  //taxonomy 種類で探す 高所作業車他
  register_taxonomy('bt_goods_cat', array('bts'),
    array(
      'labels' => array(
        'name' => '種類で探す',
        'singular_name'   => '種類で探す',
      ),
      'public' => true,
      'hierarchical' => true
    )
  );
});

// タイトルのプレースフォルダを変更
add_filter( 'enter_title_here', 'custom_enter_title_here', 10, 2 );
function custom_enter_title_here( $enter_title_here, $post ) {
    $post_type = get_post_type_object( $post->post_type );
    if ( isset( $post_type->labels->enter_title_here ) && $post_type->labels->enter_title_here && is_string( $post_type->labels->enter_title_here ) ) {
        $enter_title_here = esc_html( $post_type->labels->enter_title_here );
    }
    return $enter_title_here;
}
