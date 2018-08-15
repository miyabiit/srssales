<?php
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

<section id="index-key-visual">
<div class="content">
<div id="key-visual-content">
<h1 class="shadow strong_f"><span>「ユニットハウス」</span><span>「アタッチメント」</span><br><span>「高所作業車」</span>など好評発売中！！</h1>
<p class="shadow strong_f">構造・メンテナンス状態も良好な<span>魅力の商品ラインナップです。</span></p>
</div>
</div>
</section>

<section>
<div class="content clearfix">

<div class="pulldown_menu">
<div class="menu_box unit">
<h2 class="strong_f unit_t">ユニット</h2>
<img src="/images/menu_img_unit.png" class="menu_img">
<div class="menu_lists">
<div class="strong_f show_menu_links">坪数で探す</div>
<ul class="menu_links">
<?php
$mytax = 'un_tubo_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/un-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">用途で探す</div>
<ul class="menu_links">
<?php
$mytax = 'un_usage_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/un-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">価格で探す</div>
<ul class="menu_links">
<?php
$mytax = 'un_price_range_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/un-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">販売店で探す</div>
<ul class="menu_links">
<?php
$mytax = 'shop_sales_area_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/un-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">住所で探す</div>
<ul class="menu_links">
<?php
$mytax = 'shop_pref_area_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/un-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">状態で探す</div>
<ul class="menu_links">
<?php
$mytax = 'status_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/un-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
</div>
</div>
</div>
<div class="pulldown_menu">
<div class="menu_box atch">
<h2 class="strong_f atch_t">アタッチメント</h2>
<img src="/images/menu_img_atch.png" class="menu_img">
<div class="menu_lists">
<div class="strong_f show_menu_links">商品分類で探す</div>
<ul class="menu_links">
<?php
$mytax = 'pm_usage_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/pm-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">クラスで探す</div>
<ul class="menu_links">
<?php
$mytax = 'pm_class_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/pm-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">価格で探す</div>
<ul class="menu_links">
<?php
$mytax = 'pm_price_range_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/pm-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">販売店で探す</div>
<ul class="menu_links">
<?php
$mytax = 'shop_sales_area_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/pm-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">住所で探す</div>
<ul class="menu_links">
<?php
$mytax = 'shop_pref_area_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/pm-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">状態で探す</div>
<ul class="menu_links">
<?php
$mytax = 'status_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/pm-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
</div>
</div>
</div>
<div class="pulldown_menu">
<div class="menu_box lift">
<h2 class="strong_f lift_t">高所作業車 / 他</h2>
<img src="/images/menu_img_lift.png" class="menu_img">
<div class="menu_lists">
<div class="strong_f show_menu_links">高さで探す</div>
<ul class="menu_links">
<?php
$mytax = 'bt_height_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/bt-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">種類で探す</div>
<ul class="menu_links">
<?php
$mytax = 'bt_usage_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/bt-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">分類で探す</div>
<ul class="menu_links">
<?php
$mytax = 'bt_goods_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/bt-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>
<div class="strong_f show_menu_links">状態で探す</div>
<ul class="menu_links">
<?php
$mytax = 'status_cat';
$terms = get_terms($mytax,array('hide_empty' => false));
foreach($terms as $term){
  echo '<li><a href="/bt-result/?' . $mytax . '=' . $term->slug. '">' . $term->name . '</a></li>';
}
?>
</ul>

</div>
</div>
</div>
</div>
</section>



<!-- section id="search-box">
<div class="content">
<form id="keyword-search-box" class="flex">
<div id="search-title" class="disp_f text_c">サイト内検索</div>
<input type="text" />
<button type="submit" name="submit"><i class="fas fa-search"></i></button>
</form>
</div>
</section -->

<section id="info">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-info-circle"></i> ご案内</h2>
<ul id="information-banners" class="flex">
<li><a href="/events" class="info_banner" id="info_banner_1"><span class="shadow disp_f text_c">イベント情報</span></a></li>
<li><a href="" class="info_banner" id="info_banner_2"><span class="shadow disp_f text_c">買い取り情報</span></a></li>
<li><a href="" class="info_banner" id="info_banner_3"><span class="shadow disp_f text_c">展示販売協力会社募集</span></a></li>
</ul>
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
      'terms' => 'products_all'
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
<p id="links" class=""><a href="/">HOME</a> | <a href="/srs/_privacy.html">プライバシーポリシー</a> | <br><a href="/srs/_commerce.html">特定商取引に関する表示</a> | <a href="/srs/_sitemap.html">サイトマップ</a></p>
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
<script>
$('.show_menu_links').on('click',function(){
  var ml = $(this).next('.menu_links');

  $('.menu_links').slideUp();

  if($(ml).is(':hidden')){
    ml.slideDown();
  }else{
    ml.slideUp();
  }

});
</script>

<?php get_footer(); ?>
