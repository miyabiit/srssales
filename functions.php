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
      'taxonomies'  => array('products_cat')
    )
  );
  // post events
  register_post_type('events',
    array(
      'labels'  => array(
        'name'  => 'イベント情報',
        'name_admin_bar'  => 'イベント情報',
        'singular_name'   => 'イベント情報',
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
      'taxonomies'  => array('products_cat')
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
      'taxonomies'  => array('un_tubo_cat')
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
      'taxonomies'  => array('pm_usage_cat')
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
  register_taxonomy('products_cat', array('news','events'),
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
  //taxonomy 販促ラベル 美品、快適、NEW、商談中、即出荷、おすすめ
  register_taxonomy('mark_label_cat', array('units', 'pms', 'bts'),
    array(
      'labels' => array(
        'name' => '販促ラベル',
        'singular_name'   => '販促ラベル',
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
// search-投稿タイプ.php
add_filter('template_include','custom_search_template');
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}
//my dropdown for taxsonomy
function mydropdown_taxsonomy($mytax){
  $selected = get_query_var($mytax);
  $args = array(
    'show_option_all' => '-',
    'taxonomy' => $mytax,
    'name' => $mytax,
    'value_field' => 'slug',
    'hide_empty' => false,
    'selected' => $selected
    );
  wp_dropdown_categories($args);
}

//my checkbox list for taxonomy
function my_checkbox_list_taxonomy($mytax_name){
  $mytax = $mytax_name;
  $selected = get_query_var($mytax);
  $items = array();
  if(!is_array($selected)){
    array_push($items, $selected);
  }else{
    $items = array_merge($items,$selected);
  }
  $checked = in_array("0", $items) ? 'checked' : '';
  print('<input type="checkbox" id="' . $mytax . '_all" ' . $checked . '/> <label for="size_all" class="unit_t strong_f big mdl">すべて選択</label>');
  print('<ul class="choices clearfix">');
  $tags = get_terms($mytax, array('hide_empty' => false));
  $checkboxes = '';
  foreach($tags as $tag) :
    if(in_array("0", $items)){
      $checked = 'checked';
    }else{
      $checked = (in_array($tag->slug,$items)) ? 'checked' : '';
    }
    $checkboxes .= '<li><input type="checkbox" name="' . $mytax . '[]" value="' . $tag->slug . '" id="' . $mytax . '-' . $tag->term_id . '" ' . $checked . '/>';
    $checkboxes .= '<label for="' . $mytax . '-' . $tag->slug . '">' . $tag->name . '</label></li>';
  endforeach;
  print $checkboxes;
  echo '</ul>';
}
//query for taxonomy and meta query
//ex) $mytaxlist = array('un_tubo_cat', 'un_usage_cat', 'un_price_range_cat', 'status_cat');
//ex) $mymetalist = array('req');
function query_for_taxonomy($mypost_type,$mytaxlist,$mymetalist){
  $args = array(
    'post_type' => $mypost_type,
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'paged' => get_query_var('paged'),
    'orderby' => 'date'
  );
  $tax_args = array(
    'relation' => 'AND',
  );
  foreach($mytaxlist as $mytax){
    if($_GET[$mytax]){
      array_push($tax_args,
        array(
          'taxonomy' => $mytax,
          'field' => 'slug',
          'terms' => $_GET[$mytax]
        )
      );
    }
  }
  $args['tax_query'] = $tax_args;
  $meta_args = array(
    'relation' => 'AND',
  );
  foreach($mymetalist as $mymeta){
    if($_GET[$mymeta]){
      array_push($meta_args,
        array(
          'key' => 'req',
          'value' => $_GET[$mymeta],
          'compare' => 'IN'
        )
      );
    }
  }
  $args['meta_query'] = $meta_args;
  return $args;
}
//req変数の追加
function add_query_vars_filter( $vars ){
  $vars[] = "req";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );
//
//詳細ページの画像サムネイル表示
function view_thumbnail( $img_field_name, $true_or_false){
  $view = '';
  $img = get_field($img_field_name);
  if(!empty($img)){
    $url = $img['url'];
    $caption = $img['caption'];
    $size   = 'thumbnail';
    $thumb  = $img['sizes'][$size];
    $width  = $img['sizes'][$size . '-width' ];
    $height = $img['sizes'][$size . '-height' ];
    $class_tag = 'swap_img';
    $fancy_tag = 'gallery';
    if($true_or_false) $class_tag = 'swap_img active';
    if($true_or_false) $fancy_tag = '';
    $view = '<div><a href="' . $url . '" data-fancybox="' . $fancy_tag . '" data-image-caption="' . $caption . '" class="' . $class_tag . '"><img src="' . $thumb . '"></a></div>';
  }
  return $view;
}
//include
// custom_search
require_once locate_template('include/custom-search.php', true);
// post data to contact form 7
require_once locate_template('include/wpcf7-tag-post.php', true);
// google map code and acf
require_once locate_template('include/google-map-code.php', true);
