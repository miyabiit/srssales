<?php
/*
Template Name: btproducts 
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

<section id="sub-menu" class="lift">
<div class="content clearfix">
<div id="sub_title" class="no-pc strong_f">高所作業車・仮設機材</div>
<nav>
<ul id="sub_menu" class="clearfix">
<li id="back" class="no-sp"><a href="/btproducts" class="disp_f">ホームに戻る</a></li>
<li class="text_c"><a href="/bt-search" class="disp_f">商品検索</a></li>
<li class="text_c"><a href="/srs/_bt-guide-top.html" class="disp_f">ご利用ガイド</a></li>
<li class="text_c"><a href="/srs/_bt-info-top.html" class="disp_f">ご案内</a></li>
<li class="text_c"><a href="/bt-contact" class="disp_f">お問い合わせ</a></li>
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
<a href="/btproducts" itemprop="url">
<span itemprop="title">高所作業車・仮設機材</span>
</a>
</li>
</ul>
</div>
</section>

<section id="search-box" class="lift_s">
<div class="content">
<form class="flex clearfix" role="search" method="get" action="/bt-result">
<div class="search-selection">
<div>
<span class="disp_f">高さで探す</span>
<?php
mydropdown_taxsonomy('bt_height_cat');
?>
</div>
<div>
<span class="disp_f">分類で探す</span>
<?php
mydropdown_taxsonomy('bt_usage_cat');
?>
</div>
</div>
<div class="search-selection">

<div>
<span class="disp_f">種類で探す</span>
<?php
mydropdown_taxsonomy('bt_goods_cat');
?>
</div>
<div>
<span class="disp_f">状態で探す</span>
<?php
mydropdown_taxsonomy('status_cat');
?>
</div>
</div>











<?php
$args = query_for_taxonomy('bts', array('bt_height_cat', 'bt_usage_cat', 'bt_goods_cat','pref_cat','shop_sales_area_cat','shop_pref_area_cat','status_cat'),array());
$wp_query = new WP_query();
$wp_query->query($args);
?>
  <div class="search-button"><div id="search-hits" class="strong_f">該当件数 <span class="num"><?php echo $wp_query->found_posts; ?></span> 件</div><button type="submit" id="search-all" class="btn lift disp_f"><i class="fas fa-search"></i> 高所作業車/他を探す</button></div>
</form>
</div>
</section>
<section id="key-visual" class="lift">
<div class="content">
<form id="keyword-search-box" class="flex" method="get" action="<?php echo home_url(); ?>">
<div id="search-title" class="disp_f text_c">サイト内検索</div>
<input type="hidden" name="post_type" id="post_type" value="bts">
<input type="text" value="" name="s" id="s" />
<button type="submit"><i class="fas fa-search"></i></button>
</form>
<h1 class="disp_f text_c shadow">高所作業車と様々なアイテムを取り扱っております。</h1>
<p class="disp_f text_c shadow">豊富なラインナップをご覧ください。</p>
</div>
</section>

<section id="recommend" class="lift">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-thumbs-up"></i> お勧め商品</h2>
<div id="products-list" class="clearfix">
<?php
$query = new WP_Query(array(
  'post_type' => 'bts',
  'posts_per_page' => 5,
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
if($terms) foreach($terms as $term)array_push($tags, $term->slug);
if(in_array("goodone",$tags)) print '<div class="product_list_sign orange strong_f">美品</div>';
?>
  <div class="product_list_catch strong_f"><?php the_field('comment'); ?></div>
</div>
<?php
$img = get_field('img1');
if(!empty($img)) echo '<img src="' . $img['url'] . '" class="product_list_img" alt="商品">';
?>
<div class="product_list_detail">
<div class="product_list_name strong_f"><?php the_title(); ?></div>
<div class="product_list_info flex">
<div class="product_list_info_sub">地上床高</div>
<div class="product_list_info_data"><?php the_field('height'); ?>m</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">商品番号</div>
<div class="product_list_info_data"><?php the_field('code'); ?></div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_lift">価格</div>
<div class="product_list_info_price text_r num"><?php the_field('price'); ?><span class="yen">万円</span></div>
</div>
<div class="product_list_tags flex">
<?php
$terms = get_the_terms($post->ID, 'mark_label_cat');
$tags = [];
if($terms) foreach($terms as $term)array_push($tags, $term->slug);
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
  'posts_per_page' => 5,
  'tax_query' => array(
    array(
      'taxonomy' => 'products_cat',
      'field' => 'slug',
      'terms' => 'products_bts'
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
<li><a href="/bt-events" class="info_banner" id="info_banner_1"><span class="shadow disp_f text_c">イベント情報</span></a></li>
<li><a href="" class="info_banner" id="info_banner_2"><span class="shadow disp_f text_c">買い取り情報</span></a></li>
</ul>
</div>
</section>

<section id="guide">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-compass"></i> ご利用ガイド</h2>
<ul id="lift-guide" class="clearfix">
<li class="guide"><section class="guidance"><h3 class="guide_title">初めての方へ</h3><p>初めてご利用される方のために、このウェブサイトについて、わかりやすくご説明いたします。</p><a href="/srs/_bt-biginner.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">ご購入の流れ</h3><p>ご購入やお支払の流れを、4つのステップに分けて詳しくご説明します。</p><a href="/srs/_bt-purchase-flow.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">商品の選び方</h3><p>お客様にとって最適な高所作業車をお選びいただけるように、商品の選び方のポイントをご紹介しています。</p><a href="/srs/_bt-select.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">法律に関して</h3><p>高所作業車に関係する法令上の制限をご説明いたします。</p><a href="/srs/_bt-law.html" class="disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title">トラブルサポート</h3><p>商品が正しく動かない！？ そんな時はまずこちらのページをご確認ください。お客さまのヒントになる情報が掲載されているかもしれません。</p><a href="/srs/_bt-faq.html" class="disp_f sml">詳細を見る</a></section></li>
</ul>
</div>
</section>

<section id="contact">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-phone-square"></i> お問い合わせ</h2>
<div id="contact-box">
<p id="contact-text">商品に関するご質問・ご相談は最寄りの営業所までお問い合わせください。</p>
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



<?php get_footer(); ?>
