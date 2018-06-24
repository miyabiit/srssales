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
<a href="index" class="no-pc"><img src="/images/home_sp.png" id="sp-logo" alt="エスアールエス ホームへ"></a>
<div class="content clearfix">
<header>
<div id="btn_menu"><a href="#" class="noscroll"><span class="box"><span></span><span></span><span></span></span></a></div>
<nav>
<ul id="nav_menu" class="clearfix">
<li id="logo"><a href="index">ホーム</a></li>
<li class="text_c unit"><a href="unitproducts" class="disp_f">ユニットハウス</a></li>
<li class="text_c atch"><a href="pmproducts" class="disp_f">アタッチメント</a></li>
<li class="text_c lift"><a href="btproducts" class="disp_f">高所作業車 他</a></li>
<li class="text_c srsi"><a href="/srs/_about.html" class="disp_f">エスアールエスのご紹介</a></li>
</ul>
</nav>
</header>
</div>
</section>

<section id="sub-menu" class="lift">
<div class="content clearfix">
<div id="sub_title" class="no-pc strong_f">高所作業車 他</div>
<nav>
<ul id="sub_menu" class="clearfix">
<li id="back" class="no-sp"><a href="index" class="disp_f">ホームに戻る</a></li>
<li class="text_c"><a href="bt-search" class="disp_f active">商品検索</a></li>
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
<a href="btproducts" itemprop="url">
<span itemprop="title">高所作業車 他</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="bt-search" itemprop="url">
<span itemprop="title">商品検索メニュー</span>
</a>
</li>
</ul>
</div>
</section>

<section>
<div class="content">
<form id="keyword-search-box" class="flex">
<div id="search-title" class="disp_f text_c">サイト内検索</div>
<input type="text" />
<button type="submit" name="submit"><i class="fas fa-search"></i></button>
</form>

</div>
</section>

<section id="search-check-box">
<div class="content">
<form class="clearfix">

<div id="search-head-num">
<div class="search-hits strong_f">該当件数 <span class="num">0005</span> 件</div><button type="submit" id="search-all" class="btn lift disp_f"><i class="fas fa-search"></i></button>
</div>

<div class="search-check-selection clearfix">
<div class="check-selections clearfix">
<div class="search-button"><div class="search-hits strong_f">該当件数 <span class="num">0005</span> 件</div><button type="submit" id="search-all" class="btn lift disp_f"><i class="fas fa-search"></i> 高所作業者/他 を探す</button></div>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="lift strong_f selection_title">作業床高さで探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="height_all" /> <label for="height_all" class="lift_t strong_f big mdl">すべて選択</label>
        <ul class="choices clearfix">
            <li><input type='checkbox' name="height[]" id="height_1" value="〜4m" /> <label for="height_1">〜4m</label></li>
            <li><input type='checkbox' name="height[]" id="height_2" value="〜6m" /> <label for="height_2">〜6m</label></li>
            <li><input type='checkbox' name="height[]" id="height_3" value="〜8m" /> <label for="height_3">〜8m</label></li>
            <li><input type='checkbox' name="height[]" id="height_4" value="〜10m" /> <label for="height_4">〜10m</label></li>
            <li><input type='checkbox' name="height[]" id="height_5" value="10m以上" /> <label for="height_5">10m以上</label></li>
        </ul>
    </li>
</ul>
<button type="submit" class="btn btn_s lift strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="lift strong_f selection_title">用途で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="type_all" /> <label for="type_all" class="lift_t strong_f big mdl">すべて選択</label>
        <ul class="choices clearfix">
            <li><input type='checkbox' name="type[]" id="type_1" value="タイヤ/ホイール" /> <label for="type_1">タイヤ/ホイール</label></li>
            <li><input type='checkbox' name="type[]" id="type_2" value="キャタピラ/クローラ" /> <label for="type_2">キャタピラ/クローラ</label></li>
            <li><input type='checkbox' name="type[]" id="type_3" value="バッテリー" /> <label for="type_3">バッテリー</label></li>
            <li><input type='checkbox' name="type[]" id="type_4" value="エンジン" /> <label for="type_4">エンジン</label></li>
        </ul>
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
        <input type='checkbox' id="category_all" /> <label for="category_all" class="lift_t strong_f big mdl">すべて選択</label>
        <ul class="choices clearfix">
            <li><input type='checkbox' name="category[]" id="category_1" value="高所作業車" /> <label for="category_1">高所作業車</label></li>
            <li><input type='checkbox' name="category[]" id="category_2" value="仮設材" /> <label for="category_2">仮設材</label></li>
            <li><input type='checkbox' name="category[]" id="category_3" value="その他" /> <label for="category_3">その他</label></li>
        </ul>
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
        <input type='checkbox' id="condition_all" /> <label for="condition_all" class="lift_t strong_f big mdl">すべて選択</label>
        <ul class="choices clearfix">
            <li><input type='checkbox' name="condition[]" id="condition_1" value="N" /> <label for="condition_1">N:新品</label></li>
            <li><input type='checkbox' name="condition[]" id="condition_2" value="S" /> <label for="condition_2">S:未使用品</label></li>
            <li><input type='checkbox' name="condition[]" id="condition_3" value="A" /> <label for="condition_3">A:美品(使用感 小)</label></li>
            <li><input type='checkbox' name="condition[]" id="condition_4" value="B" /> <label for="condition_4">B:使用感 中</label></li>
            <li><input type='checkbox' name="condition[]" id="condition_5" value="C" /> <label for="condition_5">C:使用感 大</label></li>
            <li><input type='checkbox' name="condition[]" id="condition_6" value="D" /> <label for="condition_6">D:難あり</label></li>
        </ul>
    </li>
</ul>
<button type="submit" class="btn btn_s lift strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<div class="check-selections clearfix">
<div class="search-button"><div class="search-hits strong_f">該当件数 <span class="num">0005</span> 件</div><button type="submit" id="search-all" class="btn lift disp_f"><i class="fas fa-search"></i> 高所作業者/他 を探す</button></div>
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
<script src="/js/search-checkbox.js"></script>


<?php get_footer(); ?>
