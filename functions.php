<?php
//管理者メニュー
function remove_menus(){
  global $menu;
  unset($menu[5]);
}
add_action('admin_menu', 'remove_menus');

//ユーザプロフィール項目の追加
function my_user_meta($wb){
  $wb['office_code'] = '所属営業所コード';
  return $wb;
}
add_filter('user_contactmethods', 'my_user_meta', 10, 1);

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

function profile_delete() { ?>
    <script type="text/javascript">
        tftn = "table.form-table:nth-of-type";
        jQuery(document).ready(function() {
            jQuery("div#profile-page h3").css("display", "none");//『個人設定』『名前』『連絡先情報』の大タイトルを非表示に
            jQuery(tftn + "(1) tr:nth-child(1)").css("display", "none");//『ビジュアルエディター』を非表示に
            jQuery(tftn + "(1) tr:nth-child(2)").css("display", "none");//『管理画面の配色』を非表示に
            jQuery(tftn + "(1) tr:nth-child(3)").css("display", "none");//『キーボードショートカット』を非表示に
            jQuery(tftn + "(1) tr:nth-child(4)").css("display", "none");//『ツールバー』を非表示に
            jQuery(tftn + "(2) tr:nth-child(1)").css("display", "none");//『ユーザ名』を非表示に
            //jQuery(tftn + "(2) tr:nth-child(2)").css("display", "none");//『名』を非表示に
            //jQuery(tftn + "(2) tr:nth-child(3)").css("display", "none");//『姓』を非表示に
            jQuery(tftn + "(2) tr:nth-child(4)").css("display", "none");//『ニックネーム』を非表示に（※この項目は必須です）
            jQuery(tftn + "(2) tr:nth-child(5)").css("display", "none");//『ブログ上の表示名』を非表示に
            //jQuery(tftn + "(3) tr:nth-child(1)").css("display", "none");//『メールアドレス』を非表示に（※この項目は必須です）
            jQuery(tftn + "(3) tr:nth-child(2)").css("display", "none");//『ウェブサイト』を非表示に
            //jQuery(tftn + "(4) tr:nth-child(1)").css("display", "none");//『プロフィール情報』を非表示に
            //jQuery(tftn + "(4) tr:nth-child(2)").css("display", "none");//『新しいパスワード』を非表示に
            //jQuery(tftn + "(4) tr:nth-child(3)").css("display", "none");//『新しいパスワードを再入力』を非表示に
         });
    </script>
<?php 
}
add_action( 'show_user_profile', 'profile_delete' );

//非表示 他の人のポストの非表示
/*
function exclude_other_posts( $wp_query ) {
    if ( isset( $_REQUEST['post_type'] ) && post_type_exists( $_REQUEST['post_type'] ) ) {
        $post_type = get_post_type_object( $_REQUEST['post_type'] );
        $cap_type = $post_type->cap->edit_other_posts;
    } else {
        $cap_type = 'edit_others_posts';
    }

    if ( is_admin() && $wp_query->is_main_query() && ! $wp_query->get( 'author' ) && ! current_user_can( $cap_type ) ) {
        $user = wp_get_current_user();
        $wp_query->set( 'author', $user->ID );
    }
}
add_action( 'pre_get_posts', 'exclude_other_posts' );
*/
