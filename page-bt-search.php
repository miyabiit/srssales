<?php
/*
Template Name: bt-search 
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
<li id="back" class="no-sp"><a href="/btproducts" class="disp_f">カテゴリトップに戻る</a></li>
<li class="text_c"><a href="/bt-search" class="disp_f active">商品検索</a></li>
<li class="text_c"><a href="/srs/_bt-guide-top.html" class="disp_f">ご利用ガイド</a></li>
<li class="text_c"><a href="/srs/_bt-info-top.html" class="disp_f">ご案内</a></li>
<li class="text_c"><a href="/" class="disp_f">お問い合わせ</a></li>
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
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/bt-search" itemprop="url">
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
<input type="hidden" name="post_type" id="post_type" value="bts">
<input type="hidden" name="posts_per_page" id="posts_per_page" value="5">
<input type="text" value="" name="s" id="s" />
<button type="submit"><i class="fas fa-search"></i></button>
</form>

</div>
</section>

<section id="search-check-box">
<div class="content">
<form class="clearfix" role="search" method="get" action="/bt-result">

<?php
  $args = query_for_taxonomy('bts', array('bt_height_cat', 'bt_usage_cat', 'bt_goods_cat','status_cat'),array());
  $wp_query = new WP_query();
  $wp_query->query($args);
?>
<!--
<div id="search-head-num">
<div class="search-hits strong_f">該当件数 <span class="num"><?php echo $wp_query->found_posts; ?></span> 件</div><button type="submit" id="search-all" class="btn lift disp_f"><i class="fas fa-search"></i></button>
</div>
-->

<div class="search-check-selection clearfix">
<div class="check-selections clearfix">
<div class="search-button"><!-- <div class="search-hits strong_f">該当件数 <span class="num"><?php echo $wp_query->found_posts; ?></span> 件</div> --><button type="submit" id="search-all" class="btn lift disp_f"><i class="fas fa-search"></i> 高所作業車/他 を探す</button></div>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="lift strong_f selection_title">作業床高さで探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
<?php
  wp_reset_query();
  my_checkbox_list_taxonomy('bt_height_cat');
?>
    </li>
</ul>
<button type="submit" class="btn btn_s lift strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="lift strong_f selection_title">分類で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
<?php
  wp_reset_query();
  my_checkbox_list_taxonomy('bt_usage_cat');
?>
    </li>
</ul>
<button type="submit" class="btn btn_s lift strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="lift strong_f selection_title">種類で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
<?php
  wp_reset_query();
  my_checkbox_list_taxonomy('bt_goods_cat');
?>
    </li>
</ul>
<button type="submit" class="btn btn_s lift strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="lift strong_f selection_title">状態で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
<?php
  wp_reset_query();
  my_checkbox_list_taxonomy('status_cat');
?>
    </li>
</ul>
<button type="submit" class="btn btn_s lift strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<?php
  $args = query_for_taxonomy('bts', array('bt_height_cat', 'bt_usage_cat', 'bt_goods_cat','status_cat'),array());
  $wp_query = new WP_query();
  $wp_query->query($args);
?>
<div class="search-check-selection clearfix">
<div class="check-selections clearfix">
<div class="search-button"><!-- <div class="search-hits strong_f">該当件数 <span class="num"><?php echo $wp_query->found_posts; ?></span> 件</div> --><button type="submit" id="search-all" class="btn lift disp_f"><i class="fas fa-search"></i> 高所作業者/他 を探す</button></div>
</div>
</div>

</form>
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
<script src="/js/search-checkbox.js"></script>


<?php get_footer(); ?>
