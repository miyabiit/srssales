<?php
/*
Template Name: pm-events
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

<section id="sub-menu" class="atch">
<div class="content clearfix">
<div id="sub_title" class="no-pc strong_f">ユニットハウス</div>
<nav>
<ul id="sub_menu" class="clearfix">
<li id="back" class="no-sp"><a href="/" class="disp_f">ホームに戻る</a></li>
<li class="text_c"><a href="/pm-search" class="disp_f">商品検索</a></li>
<li class="text_c"><a href="/srs/_pm-guide-top.html" class="disp_f">ご利用ガイド</a></li>
<li class="text_c"><a href="/srs/_pm-info-top.html" class="disp_f active">ご案内</a></li>
<li class="text_c"><a href="/pm-contact" class="disp_f">お問い合わせ</a></li>
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
<a href="/pmproducts" itemprop="url">
<span itemprop="title">アタッチメント</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/srs/_pm-info-top.html" itemprop="url">
<span itemprop="title">ご案内</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/pm-events" itemprop="url">
<span itemprop="title">イベント情報</span>
</a>
</li>
</ul>
</div>
</section>
<section id="event" class="unit_detail">
<div class="content">
<h1 class="disp_f text_l"><i class="far fa-calendar-alt"></i> イベント情報</h1>
<?php
$query = new WP_Query(array(
  'post_type' => 'events',
  'posts_per_page' => 5,
  'tax_query' => array(
    array(
      'taxonomy' => 'products_cat',
      'field' => 'slug',
      'terms' => 'products_pms'
    )
  ),
  'orderby' => 'date_start',
  'order' => 'DESC'
));
?>
<?php
    $big = 9999999999;
    $arg = array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $wp_query->max_num_pages
    );
    echo paginate_links($arg);
?>
<?php
while( $query->have_posts()) : $query->the_post();
?>

<section class="event event_unit">
<h2><span class="event_title"><?php the_title(); ?></span></h2>
<p class="desc"><?php the_content(); ?></p>
<div class="event_data clearfix">
<dl>
<dt class="event_data_title">エリア</dt>
<dd class="event_data_content"><?php the_field('area'); ?></dd>
<dt class="event_data_title">開催日時</dt>
<dd class="event_data_content"><?php the_field('when'); ?></dd>
<dt class="event_data_title">開催場所</dt>
<dd class="event_data_content"><?php the_field('where'); ?><a href=""><i class="fas fa-map-marker fa-fw"></i>地図を見る</a></dd>
<dt class="event_data_title">チラシ</dt>
<dd class="event_data_content"><a href=""><i class="far fa-file-pdf fa-fw"></i><?php the_field('pamphlet'); ?></a></dd>
<dt class="event_data_title">お問い合わせ</dt>
<dd class="event_data_content"><?php $term = get_field('req'); echo $term->post_title; ?></dd>
<dt class="event_data_title">電話番号</dt>
<dd class="event_data_content"><a href="tel:<?php the_field('tel'); ?>"><i class="fas fa-phone-square fa-fw"></i><?php the_field('tel'); ?></a></dd>
<dt class="event_data_title">担当者</dt>
<dd class="event_data_content">
<?php
if(get_field('staff')){
  $user = get_field('staff');
  echo $user['nickname'];
}
?>
</dd>
</dl>
</div>
<p><?php the_field('last_comment'); ?></p>
</section>



<?php endwhile; ?>
<section id="contact">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-phone-square"></i> お問い合わせ</h2>
<div id="contact-box">
<p id="contact-text">アタッチメントに関するご質問・ご相談は最寄りの営業所までお問い合わせください。</p>
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
<?php get_footer(); ?>
