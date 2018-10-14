<?php
/*
Template Name: un-contact 
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
<li id="back" class="no-sp"><a href="/unitproducts" class="disp_f">カテゴリトップに戻る</a></li>
<li class="text_c"><a href="/un-search" class="disp_f">商品検索</a></li>
<li class="text_c"><a href="/srs/_un-guide-top.html" class="disp_f">ご利用ガイド</a></li>
<li class="text_c"><a href="/srs/_un-info-top.html" class="disp_f">ご案内</a></li>
<li class="text_c"><a href="/un-contact" class="disp_f active">お問い合わせ</a></li>
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
<a href="/un-contact" itemprop="url">
<span itemprop="title">お問い合わせ</span>
</a>
</li>
</ul>
</div>
</section>

<section id="misc" class="unit_detail">
<div id="misc-title" class="content">
<h1 class="txt">お問い合わせ</h1>
</div>
<div id="misc-border" class="border"></div>

<div class="content">

<p>以下のフォームに必要事項をご記入のうえ、下の「確認」ボタンを押してください。お問い合わせ頂きました内容を確認後、担当よりご連絡させて頂きます。<br>
このページはお客様の個人情報を安全に送受信するためにSSL(暗号化通信プロトコル)を使用しております。<br>
個人情報の取り扱いにつきましては、<a href="/srs/_privacy.html">プライバシーポリシー</a>を参照してください。<br>
<span class="red_t">※は必須項目です。必ず入力して下さい。</span></p>
<?php echo do_shortcode('[contact-form-7 id="514" title="Contact form units"]'); ?>

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
<script>

$(".responsive").slick({dots:!1,infinite:!1,speed:300,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:700,settings:{slidesToShow:2,slidesToScroll:2,infinite:!1,dots:!0,arrows:!1}}]});
$("[data-fancybox]").fancybox({buttons:["close"]});
$(".panorama").panorama_viewer({repeat:!0,direction:"horizontal",animationTime:700,easing:"ease-out",overlay:!0});

</script>


<?php get_footer(); ?>
