<?php
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
?>
