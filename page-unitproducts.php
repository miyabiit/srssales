<?php
/*
Template Name: unitproducts
Template Post Type: post, page, info
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
<li class="text_c unit"><a href="/" class="disp_f">ユニットハウス</a></li>
<li class="text_c atch"><a href="/" class="disp_f">アタッチメント</a></li>
<li class="text_c lift"><a href="/" class="disp_f">高所作業車 他</a></li>
<li class="text_c srsi"><a href="/" class="disp_f">エスアールエスのご紹介</a></li>
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
<li id="back" class="no-sp"><a href="/" class="disp_f">ホームに戻る</a></li>
<li class="text_c"><a href="/" class="disp_f">商品検索</a></li>
<li class="text_c"><a href="/" class="disp_f">ご利用ガイド</a></li>
<li class="text_c"><a href="/" class="disp_f">ご案内</a></li>
<li class="text_c"><a href="/" class="disp_f">お問い合わせ</a></li>
</ul>
</nav>
</div>
</section>

<section id="breadcrumb">
<div class="content">
<ul class="breadcrumb clearfix">
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="index" itemprop="url">
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
<form class="flex clearfix" action="/un-search" method="post">
<div class="search-selection">
<div>
<span class="disp_f">坪数で探す</span>
<select name="size">
<option value="">3坪未満</option>
<option value="">3坪～4坪まで</option>
<option value="">4坪～8坪まで</option>
<option value="">8坪以上</option>
</select>
</div>
<div>
<span class="disp_f">価格で探す</span>
<select name="price">
<option value="">～10万円未満</option>
<option value="">10～20万円未満</option>
<option value="">20～30万円未満</option>
<option value="">30～40万円未満</option>
<option value="">40～50万円未満</option>
<option value="">50～75万円未満</option>
<option value="">75～100万円未満</option>
<option value="">100万円以上</option>
</select>
</div>
<div>
<span class="disp_f">用途で探す</span>
<select name="usage">
<option value="">事務所/休憩所</option>
<option value="">倉庫/物置</option>
<option value="">店舗</option>
<option value="">トイレ</option>
<option value="">2階建て</option>
<option value="">その他</option>
</select>
</div>
</div>
<div class="search-selection">
<div>
<span class="disp_f">販売店で探す</span>
<select name="dealer">
<option value="">北海道/東北</option>
<option value="">北陸/信越</option>
<option value="">関東</option>
<option value="">東海</option>
<option value="">近畿</option>
<option value="">中国/四国</option>
<option value="">九州</option>
</select>
</div>
<div>
<span class="disp_f">住所で探す</span>
<select name="address">
<option value="">北海道/東北地方</option>
<option value="">関東地方</option>
<option value="">中部地方</option>
<option value="">近畿地方</option>
<option value="">中国地方</option>
<option value="">四国地方</option>
<option value="">九州地方</option>
</select>
</div>
<div>
<span class="disp_f">状態で探す</span>
<select name="status">
<option value="">N:新品</option>
<option value="">S:未使用品</option>
<option value="">A:美品(使用感小)</option>
<option value="">B:使用感中</option>
<option value="">C:使用感大</option>
<option value="">D:難あり</option>
</select>
</div>
</div>
<div class="search-button"><div id="search-hits" class="strong_f">該当件数 <span class="num">0005</span> 件</div><button type="submit" id="search-all" class="btn unit disp_f"><i class="fas fa-search"></i> ユニットハウスを探す</button></div>
</form>
</div>
</section>
<section id="key-visual" class="unit">
<div class="content">
<form id="keyword-search-box" class="flex">
<div id="search-title" class="disp_f text_c">サイト内検索</div>
<input type="text" />
<button type="submit" name="submit"><i class="fas fa-search"></i></button>
</form>
<h1 class="disp_f text_c shadow">ユニットハウス</h1>
<p class="disp_f text_c shadow">構造・メインテナンス状態も良好</p>
</div>
</section>

<section id="recommend" class="unit">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-thumbs-up"></i> お勧め商品</h2>
<div id="products-list" class="clearfix">
<div class="products float_l">
<a href="">
<div class="product_list_title flex">
<div class="product_list_sign orange strong_f">美品</div>
<div class="product_list_catch strong_f">エアコン付きで快適<br>勉強部屋に</div>
</div>
<img src="/images/prod.jpg" class="product_list_img" alt="商品">
<div class="product_list_detail">
<div class="product_list_name strong_f">4坪エアコンハウス</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">サイズ</div>
<div class="product_list_info_data">4坪</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">商品番号</div>
<div class="product_list_info_data">NEOIQHGAQ9</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_unit">価格</div>
<div class="product_list_info_price text_r num">198.5<span class="yen">万円</span></div>
</div>
<div class="product_list_tags flex">
<div class="product_list_sign red strong_f">NEW</div>
<div class="product_list_sign orange strong_f">おすすめ</div>
</div>
</div>
</a>
</div>
<div class="products float_l">
<a href="">
<div class="product_list_title flex">
<div class="product_list_sign orange strong_f">美品</div>
<div class="product_list_catch strong_f">エアコン付きで快適<br>勉強部屋に</div>
</div>
<img src="/images/prod.jpg" class="product_list_img" alt="商品">
<div class="product_list_detail">
<div class="product_list_name strong_f">4坪エアコンハウス</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">サイズ</div>
<div class="product_list_info_data">4坪</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">商品番号</div>
<div class="product_list_info_data">NEOIQHGAQ9</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_unit">価格</div>
<div class="product_list_info_price text_r num">198.5<span class="yen">万円</span></div>
</div>
<div class="product_list_tags flex">
<div class="product_list_sign red strong_f">NEW</div>
<div class="product_list_sign orange strong_f">おすすめ</div>
</div>
</div>
</a>
</div>
<div class="products float_l">
<a href="">
<div class="product_list_title flex">
<div class="product_list_sign orange strong_f">美品</div>
<div class="product_list_catch strong_f">エアコン付きで快適<br>勉強部屋に</div>
</div>
<img src="/images/prod.jpg" class="product_list_img" alt="商品">
<div class="product_list_detail">
<div class="product_list_name strong_f">4坪エアコンハウス</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">サイズ</div>
<div class="product_list_info_data">4坪</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">商品番号</div>
<div class="product_list_info_data">NEOIQHGAQ9</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_unit">価格</div>
<div class="product_list_info_price text_r num">198.5<span class="yen">万円</span></div>
</div>
<div class="product_list_tags flex">
<div class="product_list_sign red strong_f">NEW</div>
<div class="product_list_sign orange strong_f">おすすめ</div>
</div>
</div>
</a>
</div>
<div class="products float_l">
<a href="">
<div class="product_list_title flex">
<div class="product_list_sign blue strong_f">美品</div>
<div class="product_list_catch strong_f">エアコン付きで快適<br>勉強部屋に</div>
</div>
<img src="/images/prod.jpg" class="product_list_img" alt="商品">
<div class="product_list_detail">
<div class="product_list_name strong_f">4坪エアコンハウス 4坪エアコンハウス</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">サイズ</div>
<div class="product_list_info_data">4坪</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">商品番号</div>
<div class="product_list_info_data">NEOIQHGAQ9</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_unit">価格</div>
<div class="product_list_info_price text_r num">198.5<span class="yen">万円</span></div>
</div>
<div class="product_list_tags flex">
<div class="product_list_sign red strong_f">NEW</div>
<div class="product_list_sign orange strong_f">おすすめ</div>
<div class="product_list_sign blue strong_f">快適</div>
</div>
</div>
</a>
</div>
<div class="products float_l">
<a href="">
<div class="product_list_title flex">
<div class="product_list_sign orange strong_f">美品</div>
<div class="product_list_catch strong_f">エアコン付きで快適<br>勉強部屋に</div>
</div>
<img src="/images/prod.jpg" class="product_list_img" alt="商品">
<div class="product_list_detail">
<div class="product_list_name strong_f">4坪エアコンハウス</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">サイズ</div>
<div class="product_list_info_data">4坪</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_sub">商品番号</div>
<div class="product_list_info_data">NEOIQHGAQ9</div>
</div>
<div class="product_list_info flex">
<div class="product_list_info_unit">価格</div>
<div class="product_list_info_price text_r num">198.5<span class="yen">万円</span></div>
</div>
<div class="product_list_tags flex">
<div class="product_list_sign red strong_f">NEW</div>
<div class="product_list_sign orange strong_f">おすすめ</div>
</div>
</div>
</a>
</div>
</div>
</div>
</section>

<section id="news">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-bullhorn"></i> お知らせ</h2>
<ul id="news-list">
<li><span class="date">2018年04月02日（月）</span><a href="">プロマックス事業部 熊本営業所が移転致しました。</a></li>
<li><span class="date">2018年04月02日（月）</span><a href="">プロマックス事業部 熊本営業所が移転致しました。</a></li>
<li><span class="date">2018年04月02日（月）</span><a href="">プロマックス事業部 熊本営業所が移転致しました。</a></li>
</ul>
</div>
</section>

<section id="info">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-info-circle"></i> ご案内</h2>
<ul id="information-banners" class="flex">
<li><a href="" class="info_banner" id="info_banner_1"><span class="shadow disp_f text_c">イベント情報</span></a></li>
<li><a href="" class="info_banner" id="info_banner_2"><span class="shadow disp_f text_c">買い取り情報</span></a></li>
<li><a href="" class="info_banner" id="info_banner_3"><span class="shadow disp_f text_c">展示販売協力会社募集</span></a></li>
</ul>
</div>
</section>

<section id="guide">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-compass"></i> ご利用ガイド</h2>
<ul id="guidance-list" class="clearfix">
<li class="guide"><section class="guidance"><h3 class="guide_title unit_t">初めての方へ</h3><p>初めてご利用される方のために、このウェブサイトについて、わかりやすくご説明いたします。</p><a href="/" class="unit disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title unit_t">ユニットハウスとは</h3><p>ユニットハウスって何？プレハブとの違いは何？ユニットハウスについてわかりやすくご説明いたします。</p><a href="/" class="unit disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title unit_t">ご購入の流れ</h3><p>ご購入やお支払の流れを、4つのステップに分けて詳しくご説明します。</p><a href="/" class="unit disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title unit_t">納品・施工の流れ</h3><p>ご購入やお支払の流れを、４つのステップに分けて詳しくご説明します。</p><a href="/" class="unit disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title unit_t">商品の選び方</h3><p>お客様にとって最適なユニットハウスをお選びいただけるように、商品の選び方のポイントをご紹介しています。</p><a href="/" class="unit disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title unit_t">法律に関して</h3><p>ユニットハウスを設置する際に関係する法令上の制限をご説明いたします。</p><a href="/" class="unit disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title unit_t">リフォーム・カスタム</h3><p>リフォームやカスタマイズをご希望のお客様へ快適な空間づくりをサポートいたします。</p><a href="/" class="unit disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title unit_t">FAQ</h3><p>お客様から寄せられたよくあるご質問を一問一答でお答えします。</p><a href="/" class="unit disp_f sml">詳細を見る</a></section></li>
<li class="guide"><section class="guidance"><h3 class="guide_title unit_t">ご購入の流れ</h3><p>ご購入やお支払の流れを、4つのステップに分けて詳しくご説明します。</p><a href="/" class="unit disp_f sml">詳細を見る</a></section></li>
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
<link rel="stylesheet" href="/css/products.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="/js/jquery.debouncedresize.min.js"></script>
<script src="/js/common.js"></script>

<?php get_footer(); ?>
