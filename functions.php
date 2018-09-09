<?php
//管理者メニュー
function remove_menus(){
  global $menu;
  unset($menu[5]);
}
add_action('admin_menu', 'remove_menus');

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

//req変数の追加
function add_query_vars_filter( $vars ){
  $vars[] = "req";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

//include
//カスタム投稿登録 & タクソノミー登録
require_once locate_template('include/register-posttype-taxonomy.php', true);
//詳細ページの画像サムネイル表示
require_once locate_template('include/view-thumbnail.php', true);
// custom_search
require_once locate_template('include/custom-search.php', true);
// post data to contact form 7
require_once locate_template('include/wpcf7-tag-post.php', true);
// google map code and acf
require_once locate_template('include/google-map-code.php', true);
//その他funcions
require_once locate_template('include/myfunctions.php', true);
