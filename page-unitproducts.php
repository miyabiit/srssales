<?php
/*
Template Name: unitproducts 
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
<li class="text_c lift"><a href="/btproducts" class="disp_f">高所作業車 他</a></li>
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
<li class="text_c"><a href="/un-search" class="disp_f">商品検索</a></li>
<li class="text_c"><a href="/srs/_un-guide-top.html" class="disp_f">ご利用ガイド</a></li>
<li class="text_c"><a href="/srs/_un-info-top.html" class="disp_f">ご案内</a></li>
<li class="text_c"><a href="/srs/_un-contact.html" class="disp_f">お問い合わせ</a></li>
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
<a href="unitproducts" itemprop="url">
<span itemprop="title">ユニットハウス</span>
</a>
</li>
</ul>
</div>
</section>

<section id="search-box" class="unit_s">
<div class="content">
<form class="flex clearfix" role="search" method="get" action="/un-result">
<div class="search-selection">
<div>
<span class="disp_f">坪数で探す</span>
<?php
mydropdown_taxsonomy("un_tubo_cat");
?>
</div>
<div>
<span class="disp_f">価格で探す</span>
<?php
$mytax = "un_price_range_cat";
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
?>
</div>
<div>
<span class="disp_f">用途で探す</span>
<?php
$mytax = "un_usage_cat";
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
?>
</div>
</div>
<div class="search-selection">
<div>
<span class="disp_f">販売店で探す</span>
<?php
$mytax = "shop_sales_area_cat";
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
?>
</div>
<div>
<span class="disp_f">住所で探す</span>
<?php
$mytax = "shop_pref_area_cat";
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
?>
</div>
<div>
<span class="disp_f">状態で探す</span>
<?php
$mytax = "status_cat";
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
?>
</div>
</div>
<?php
$args = array(
  'post_type' => 'units',
);
if($_GET['un_tubo_cat']){
  $un_tubo_cat_args = array(
    'taxonomy' => 'un_tubo_cat',
    'field' => 'slug',
    'terms' => $_GET['un_tubo_cat']
  );
  $args["un_tubo_cat"] = $un_tubo_cat_args;
};
if( !empty($un_tubo_cat_args) || !empty($un_usage_cat_args)){
  $args['tax_query'] = array(
    'relation' => 'OR',
    $un_tubo_cat_args,
    $un_usage_cat_args
  );
};
$wp_query = new WP_Query();
$wp_query->query($args);
?>
  <div class="search-button"><div id="search-hits" class="strong_f">該当件数 <span class="num"><?php echo $wp_query->found_posts; ?></span> 件</div><button type="submit" id="search-all" class="btn unit disp_f"><i class="fas fa-search"></i> ユニットハウスを探す</button></div>
</form>
</div>
</section>
<section id="key-visual" class="unit">
<div class="content">
<form id="keyword-search-box" class="flex" method="get" action="<?php echo home_url(); ?>">
<div id="search-title" class="disp_f text_c">サイト内検索</div>
<input type="hidden" name="post_type" id="post_type" value="units">
<input type="text" value="" name="s" id="s" />
<button type="submit"><i class="fas fa-search"></i></button>
</form>
<h1 class="disp_f text_c shadow">ユニットハウス</h1>
<p class="disp_f text_c shadow">ユニットハウスの購入をお考えの皆様へ<br>信頼と実績のエスアールエスをご検討ください。</p>
</div>
</section>

<section id="recommend" class="unit">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-thumbs-up"></i> お勧め商品</h2>
<div id="products-list" class="clearfix">
<?php
$query = new WP_Query(array(
  'post_type' => 'units',
  'post_per_page' => 5,
  'orderby' => 'date',
  'order' => 'DESC'
));
while($query->have_posts()) : $query->the_post();
?>
<div class="products float_l">
<a href="<?php the_permalink(); ?>">
<div class="product_list_title flex">
<?php
$terms = get_the_terms($post->ID, 'mark_label_cat');
$tags = [];
foreach($terms as $term)array_push($tags, $term->slug);
if(in_array("goodone",$tags)) print '<div class="product_list_sign orange strong_f">美品</div>';
?>
<div class="product_list_catch strong_f"><?php echo get_post_meta($post->ID, 'comment', true); ?></div>
</div>
<img src="/images/prod.jpg" class="product_list_img" alt="商品">
<div class="product_list_detail">
<div class="product_list_name strong_f"><?php the_title(); ?></div>
<div class="product_list_info flex">
<div class="product_list_info_sub">サイズ</div>
<div class="product_list_info_data"><?php echo get_post_meta($post->ID, 'm2', true); ?>坪</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">商品番号</div>
<div class="product_list_info_data"><?php echo the_field('code'); ?></div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_unit">価格</div>
<div class="product_list_info_price text_r num"><?php echo the_field('price'); ?><span class="yen">万円</span></div>
</div>
<div class="product_list_tags flex">
<?php
$terms = get_the_terms($post->ID, 'mark_label_cat');
$tags = [];
foreach($terms as $term)array_push($tags, $term->slug);
if(in_array("newone",$tags))print '<div class="product_list_sign red strong_f">NEW</div>';
if(in_array("recommend",$tags))print '<div class="product_list_sign orange strong_f">おすすめ</div>';
if(in_array("condition",$tags))print '<div class="product_list_sign blue strong_f">快適</div>';
?>
</div>
</div>
</a>
</div>
<?php endwhile; ?>

</div>
</div>
</section>

<section id="news">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-bullhorn"></i> お知らせ</h2>
<ul id="news-list">
<?php
$query = new WP_Query(array(
  'post_type' => 'news',
  'post_per_page' => 5,
  'tax_query' => array(
    array(
      'taxonomy' => 'products_cat',
      'field' => 'slug',
      'terms' => 'products_units'
    )
  ),
  'orderby' => 'date',
  'order' => 'DESC'
));
while($query->have_posts()) : $query->the_post();
?>
  <li><span class="date"><?php the_time("Y年m月d日 l  "); ?></span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>
</div>
</section>

<section id="info">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-info-circle"></i> ご案内</h2>
<ul id="information-banners" class="flex">
<li><a href="/srs/_un-event.html" class="info_banner" id="info_banner_1"><span class="shadow disp_f text_c">イベント情報</span></a></li>
<li><a href="" class="info_banner" id="info_banner_2"><span class="shadow disp_f text_c">買い取り情報</span></a></li>
<li><a href="/srs/_exhibit.html" class="info_banner" id="info_banner_3"><span class="shadow disp_f text_c">展示販売協力会社募集</span></a></li>
</ul>
</div>
</section>

<section id="guide">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-compass"></i> ご利用ガイド</h2>
<ul id="unit-guide" class="clearfix">
<li class="guide"><section class="guidance"><h3 class="guide_title">初めての方へ</h3><p>初めてご利用される方のために、このウェブサイトについて、わかりやすくご説明いたします。</p><a href="/srs/_un-beginner.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">ユニットハウスとは</h3><p>ユニットハウスって何？プレハブとの違いは何？ユニットハウスについてわかりやすくご説明いたします。</p><a href="/srs/_unitproducts-about.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">ご購入の流れ</h3><p>ご購入やお支払の流れを、4つのステップに分けて詳しくご説明します。</p><a href="/srs/_un-purchase-flow.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">納品・施工の流れ</h3><p>ご購入やお支払の流れを、４つのステップに分けて詳しくご説明します。</p><a href="/srs/_construction-flow.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">商品の選び方</h3><p>お客様にとって最適なユニットハウスをお選びいただけるように、商品の選び方のポイントをご紹介しています。</p><a href="un-select.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">設置ガイド</h3><p>ここではユニットハウスの設置についてご説明させていただきます。ユニットハウスご購入の際の参考になさってください。</p><a href="/srs/_installation.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">法律に関して</h3><p>ユニットハウスに関係する法令上の制限をご説明いたします。</p><a href="/srs/_un-law.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">リフォーム・カスタム</h3><p>リフォームやカスタマイズをご希望のお客様へ快適な空間づくりをサポートいたします。</p><a href="/srs/_customize.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">FAQ</h3><p>お客様から寄せられたよくあるご質問を一問一答でお答えします。</p><a href="/srs/_un-faq.html" class="disp_f sml">詳細を見る</a></section></li>

</ul>
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
<p id="links" class=""><a href="/">HOME</a> | <a href="/srs/_privacy.html">プライバシーポリシー</a> | <br><a href="commerce.html">特定商取引に関する表示</a> | <a href="sitemap.html">サイトマップ</a></p>
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



<?php get_footer(); ?>
