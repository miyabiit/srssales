<?php
/*
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
<li class="text_c srsi"><a href="/srs/_about" class="disp_f">エスアールエスのご紹介</a></li>
</ul>
</nav>
</header>
</div>
</section>

<section id="sub-menu" class="srsi">
<div class="content clearfix">
<div id="sub_title" class="no-pc strong_f">エスアールエスのご紹介</div>
<nav>
<ul id="sub_menu" class="clearfix">
<li id="back" class="no-sp"><a href="/" class="disp_f">ホームに戻る</a></li>
<li class="text_c"><a href="feature" class="disp_f">特徴</a></li>
<li class="text_c"><a href="/srs/_office" class="disp_f">店舗情報</a></li>
<li class="text_c"><a href="/srs/_corporate" class="disp_f">会社案内</a></li>
<li class="text_c"><a href="/srs/_contact" class="disp_f">お問い合わせ</a></li>
</ul>
</nav>
</div>
</section>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
<section id="breadcrumb">
<div class="content">
<ul class="breadcrumb clearfix">
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/" itemprop="url">
<span itemprop="title">ホーム</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/newsarch" itemprop="url">
<span itemprop="title">お知らせ</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="news" itemprop="url">
<span itemprop="title"><?php the_title(); ?></span>
</a>
</li>
</ul>
</div>
</section>

<section id="misc" class="srsi_detail">
<div id="misc-title" class="content">
<h1 class="txt"><?php the_title(); ?></h1>
</div>
<div id="misc-border" class="border"></div>

<div class="content">

<div id="news-publish-date" class="text_r"><i class="fa fa-clock"></i><?php the_time('Y-m-d');?></div>
<div id="news-image" class="text_c"><img src="/images/about-unit1.jpg"></div>

<?php the_content(); ?>
<p>&nbsp;</p>
<p>2018年6月開催のプロマックス事業部各地区での展示即売会をご案内致します。</p>
<p>多種多様な商品をご用意しておりますので、是非、各展示会場までお越しください。</p>
<p>&nbsp;</p>
<p>【関東地区】<br>
2018/6/16（土）～17（日）　<span style="text-decoration: underline;"><a href="http://www.srscorp.co.jp/fieldoffice/pm045/" target="_blank">水戸ハウスヤード</a></span><br>
　※目玉商品多数出品！特典もあります！是非ご来場ください</p>
<p>&nbsp;</p>
<p>【九州地区】<br>
2018/6/1（金）～3（日）　<span style="text-decoration: underline;"><a href="http://www.srscorp.co.jp/showroom/pm-t008/" target="_blank">鹿屋展示場</a></span><br>
　※目玉商品多数出品！その他特価品もあります！是非ご来場ください</p>
<p>&nbsp;</p>
<p>2018/6/9（土）～10（日）　<span style="text-decoration: underline;"><a href="http://www.srscorp.co.jp/fieldoffice/pm032/" target="_blank">中間ハウスヤード</a></span><br>
　※目玉商品・特価品も多数ご用意しております！是非ご来場ください</p>
<p>&nbsp;</p>
<p>※各拠点名をクリックしていただくと拠点地図にジャンプ致します。</p>
<p>&nbsp;</p>

<h2 class="txt"><i class="fas fa-download"></i> ファイルダウンロード</h2>
<p><a href=""><i class="fas fa-file-pdf"></i> プロマックス事業部各地区での展示即売会開催について (PDF / 120kb)</a></p>


<h2 class="txt"><i class="fas fa-link"></i> リンク先</h2>
<p><a href="http://www.srscorp.co.jp/" target="_blank"><i class="fas fa-arrow-circle-right"></i> エスアールエス株式会社</a></p>


</div>
</div>
</section>
<?php endwhile; endif; ?>
<section id="footer" class="srsd">
<div class="content">
<footer class="clearfix flex">
<div id="company-info">
<p id="company" class="flex"><img src="/images/srs.png"><span>高所作業車、特殊作業車、アタッチメント、ユニットハウスのことなら<span id="company-name">エスアールエス株式会社</span></span></p>
</div>
<div>
<p id="links" class=""><a href="/">HOME</a> | <a href="/srs/_privacy">プライバシーポリシー</a> | <br><a href="commerce">特定商取引に関する表示</a> | <a href="sitemap">サイトマップ</a></p>
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
