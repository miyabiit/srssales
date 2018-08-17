<?php
/*
Template Name: un-search 
*/
?>
<?php get_header(); ?>
<body>

<section id="head">
<div id="head_info" class="no-sp">
<div class="content">
<div class="flex clearfix">
<div class="flex text_r tel_info">受付時間 8:30～17:00（日・祝日を除く）<span class="tel num"><img src="/images/freedial.png" class="freedial" alt="フリーダイアル">0120-590-907</span></div>
<div class="xs">商品に関するご質問やご相談など、お気軽にお問い合わせください。</div>
</div>
</div>
</div>
<a href="/" class="no-pc"><img src="/images/home_sp.png" id="sp-logo" alt="エスアールエス ホームへ"></a>
<div class="content clearfix">
<header>
<div id="btn_menu"><a href="#" class="noscroll"><span class="box"><span></span><span></span><span></span></span></a></div>
<nav>
<ul id="nav_menu" class="clearfix">
<li id="logo"><a href="/">ホーム</a></li>
<li class="text_c unit"><a href="/unitproducts" class="disp_f">ユニットハウス</a></li>
<li class="text_c atch"><a href="/pmproducts" class="disp_f">アタッチメント</a></li>
<li class="text_c lift"><a href="/btproducts" class="disp_f">高所作業車・仮設機材</a></li>
<li class="text_c srsi"><a href="/srs/_about.html" class="disp_f">エスアールエスのご紹介</a></li>
</ul>
</nav>
</header>
</div>
</section>

<section id="sub-menu" class="unit">
<div class="content clearfix">
<div id="sub_title" class="no-pc strong_f">ユニットハウス</div>
<nav>
<ul id="sub_menu" class="clearfix">
<li id="back" class="no-sp"><a href="/unitproducts" class="disp_f">ホームに戻る</a></li>
<li class="text_c"><a href="/un-search" class="disp_f active">商品検索</a></li>
<li class="text_c"><a href="/srs/_un-guide-top.html" class="disp_f">ご利用ガイド</a></li>
<li class="text_c"><a href="/srs/_un-info-top.html" class="disp_f">ご案内</a></li>
<li class="text_c"><a href="/un-contact" class="disp_f">お問い合わせ</a></li>
</ul>
</nav>
</div>
</section>

<section id="breadcrumb">
<div class="content">
<ul class="breadcrumb clearfix">
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/" itemprop="url">
<span itemprop="title">ホーム</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/unitproducts" itemprop="url">
<span itemprop="title">ユニットハウス</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/un-search" itemprop="url">
<span itemprop="title">商品検索メニュー</span>
</a>
</li>
</ul>
</div>
</section>

<section>
<div class="content">

<form id="keyword-search-box" class="flex" method="get" action="<?php echo home_url(); ?>">
<div id="search-title" class="disp_f text_c">サイト内検索</div>
<input type="hidden" name="post_type" id="post_type" value="units">
<!--
<input type="hidden" name="posts_per_page" id="posts_per_page" value="5">
<input type="hidden" name="paged" id="paged" value="1">
-->
<input type="text" value="" name="s" id="s" />
<button type="submit"><i class="fas fa-search"></i></button>
</form>

</div>
</section>

<section id="search-check-box">
<div class="content">
<form class="clearfix" role="search" method="get" action="/un-result">

<?php
  $args = query_for_taxonomy('units', array('un_tubo_cat', 'un_usage_cat', 'un_price_range_cat','pref_cat','shop_sales_area_cat','shop_pref_area_cat','status_cat'),array('req'));
  $wp_query = new WP_query();
  $wp_query->query($args);
?>
<!--
<div id="search-head-num">
<div class="search-hits strong_f">該当件数 <span class="num"><?php echo $wp_query->found_posts; ?></span> 件</div><button type="submit" id="search-all" class="btn unit disp_f"><i class="fas fa-search"></i></button>
</div>
-->

<div class="search-check-selection clearfix">
<div class="check-selections clearfix">
<div class="search-button"><!-- <div class="search-hits strong_f">該当件数 <span class="num"><?php echo $wp_query->found_posts; ?></span> 件</div> --><button type="submit" id="search-all" class="btn unit disp_f"><i class="fas fa-search"></i> ユニットハウスを探す</button></div>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="unit strong_f selection_title">坪数で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
<?php
  wp_reset_query();
  my_checkbox_list_taxonomy('un_tubo_cat');
?>
    </li>
</ul>
<button type="submit" class="btn btn_s unit strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="unit strong_f selection_title">用途で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
<?php
  my_checkbox_list_taxonomy('un_usage_cat');
?>
    </li>
</ul>
<button type="submit" class="btn btn_s unit strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="unit strong_f selection_title">価格で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
<?php
  my_checkbox_list_taxonomy('un_price_range_cat');
?>
    </li>
</ul>
<button type="submit" class="btn btn_s unit strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="unit strong_f selection_title">販売店で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="dealer_all" /> <label for="dealer_all" class="unit_t strong_f big mdl">すべて選択</label>
<?php
  $tags = get_terms('shop_sales_area_cat', array('hide_empty' => false));
  $items = array();
  $selected = get_query_var('shop_sales_area_cat');
  if(!is_array($selected)){
    array_push($items, $selected);
  }else{
    $items = array_merge($items, $selected);
  }
  $selected = get_query_var('req');
  if(!is_array($selected)){
    array_push($items, $selected);
  }else{
    $items = array_merge($items, $selected);
  }
  foreach($tags as $tag) :
    $parentchecked = in_array($tag->slug, $items) ? 'checked' : '';
?>
        <ul class="clearfix">
        <li class="choice_area"><input type="checkbox" id="" <?php echo $parentchecked; ?> /><label for="<?php echo $tag->slug; ?>" class="unit_t strong_f big"><?php echo $tag->name ?></label>
<?php
  print('<ul class="choices clearfix">');
  $query = new WP_Query(array(
    'post_type' => 'shops',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
       'taxonomy' => 'shop_sales_area_cat',
       'field' => 'slug',
       'terms' => $tag->slug
      )
    ),
    'orderby' => 'ID',
    'order' => 'ASC'
  ));
  while($query->have_posts()) : $query->the_post();
    if($parentchecked == ''){
      $checked = in_array($post->ID, $items) ? 'checked' : '';
    }else{
      $checked = 'checked';
    }
?>
  <li><input type="checkbox" name="req[]" id="req_<?php echo $post->ID; ?>" value="<?php echo $post->ID; ?>" <?php echo $checked; ?> /><label for="req_<?php echo $post->ID; ?>"><?php the_title(); ?></label></li>
<?php
  endwhile;
  print('</ul></li>');
  endforeach;
?>
</ul>
<button type="submit" class="btn btn_s unit strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="unit strong_f selection_title">住所で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="prefecture_all" /> <label for="prefecture_all" class="unit_t strong_f big mdl">すべて選択</label>
        <ul class="clearfix">
<?php
  $mytax = 'pref_cat';
  $tags = get_terms($mytax, array('hide_empty' => false));
  $items = array();
  $selected = get_query_var('shop_pref_area_cat');
  if(!is_array($selected)){
    array_push($items, $selected);
  }else{
    $items = array_merge($items, $selected);
  }
  $selected = get_query_var('pref_cat');
  if(!is_array($selected)){
    array_push($items, $selected);
  }else{
    $items = array_merge($items, $selected);
  }
  $checkboxes = '';
  $first_parent = true;
  foreach($tags as $tag){
    if($tag->parent){
      // 子の階層
      if($parentchecked == ''){
        $checked = in_array($tag->slug, $items) ? 'checked' : '';
      }else{
        $checked = 'checked';
      }
      $checkboxes .= '<li><input type="checkbox" name="' . $mytax . '[]" value="' . $tag->slug . '" id="' . $mytax . '-' . $tag->term_id . '" ' . $checked . '/>';
      $checkboxes .= '<label for="' . $mytax . '-' . $tag->slug . '">' . $tag->name . '</label></li>';
    }else{
      // 親の階層
      $parentchecked = in_array($tag->slug, $items) ? 'checked' : '';
      if(!$first_parent){
        $checkboxes .= '</ul></li>';
      }
      $checkboxes .= '<li class="choice_area"><input type="checkbox" id="" '. $parentchecked . '/><label for="" class="unit_t strong_f big">' . $tag->name . '</label>';
      $checkboxes .= '<ul class="choices clearfix">';
      $first_parent = false;
    }
  }
  $checkboxes .= '</ul></li>';
  print $checkboxes;
?>
        </ul>
    </li>
</ul>
<button type="submit" class="btn btn_s unit strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="unit strong_f selection_title">状態で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
<?php
  my_checkbox_list_taxonomy('status_cat');
?>
    </li>
</ul>
<button type="submit" class="btn btn_s unit strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<?php
  $args = query_for_taxonomy('units', array('un_tubo_cat', 'un_usage_cat', 'un_price_range_cat','pref_cat','shop_sales_area_cat','shop_pref_area_cat','status_cat'),array('req'));
  $wp_query = new WP_query();
  $wp_query->query($args);
?>
<div class="search-check-selection clearfix">
<div class="check-selections clearfix">
<div class="search-button"><!-- <div class="search-hits strong_f">該当件数 <span class="num"><?php echo $wp_query->found_posts; ?></span> 件</div> --><button type="submit" id="search-all" class="btn unit disp_f"><i class="fas fa-search"></i> ユニットハウスを探す</button></div>
</div>
</div>

</form>
</div>

</section>



<section id="contact">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-phone-square"></i> お問い合わせ</h2>
<div id="contact-box">
<p id="contact-text">中古ユニットハウスに関するご質問・ご相談は最寄りの営業所までお問い合わせください。</p>
<p id="contact-tel" class="text_r disp_f">受付時間 8:30～17:00（日・祝日を除く）<span class="tel num"><img src="/images/freedial_g.png" class="freedial" alt="フリーダイアル">0120-590-907</span></p>
</div>
</div>
</section>

<section id="footer" class="srsd">
<div class="content">
<footer class="clearfix flex">
<div id="company-info">
<p id="company" class="flex"><img src="/images/srs.png"><span>高所作業車、特殊作業車、アタッチメント、ユニットハウスのことなら<span id="company-name">エスアールエス株式会社</span></span></p>
</div>
<div>
<p id="links" class=""><a href="/">HOME</a> | <a href="/srs/_privacy.html">プライバシーポリシー</a> |  <a href="/srs/_sitemap.html">サイトマップ</a></p>
<p id="copy" class="xs">Copyright &copy; 2018 SRS Corporation. <br>All Rights Reserved.</p>
</div>
<div id="pagetop" class="srsd"><i class="fas fa-chevron-circle-up"></i> 上へ戻る</div>
</footer>
</div>

</section>
<link rel="stylesheet" href="/css/main.css">
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="/js/jquery.debouncedresize.min.js"></script>
<script src="/js/common.js"></script>
<script src="/js/search-checkbox.js"></script>


<?php get_footer(); ?>
