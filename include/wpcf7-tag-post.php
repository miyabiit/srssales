<?php
function my_form_tag_filter($tag){
  if ( ! is_array( $tag ) ) return $tag;
  if(isset($_GET['goods_title'])){
    $name = $tag['name'];
    if($name == 'goods_title') $tag['values'] = (array) $_GET['goods_title'];
  }
  if(isset($_GET['goods_code'])){
    $name = $tag['name'];
    if($name == 'goods_code') $tag['values'] = (array) $_GET['goods_code'];
  }
  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter');
?>
