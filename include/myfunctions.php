<?php
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
?>
