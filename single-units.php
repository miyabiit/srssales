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
<li class="text_c"><a href="/srs/_constact.html" class="disp_f">お問い合わせ</a></li>
</ul>
</nav>
</div>
</section>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
<section id="breadcrumb">
<div class="content">
<ul class="breadcrumb clearfix">
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="ホームのＵＲＬ" itemprop="url">
<span itemprop="title">ホーム</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="unitproducts" itemprop="url">
<span itemprop="title">ユニットハウス</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="un-products" itemprop="url">
<span itemprop="title"><?php the_title(); ?></span>
</a>
</li>
</ul>
</div>
</section>

<section id="product-detail" class="unit_detail">
<div id="product-title" class="content">
<h1 class="txt"><?php the_title(); ?>
<div id="icons"><span class="product_list_sign red strong_f">NEW</span><span class="product_list_sign orange strong_f">おすすめ</span><span class="product_list_sign blue strong_f">美品</span><span class="product_list_sign green strong_f">即出荷</span><span class="product_list_sign gray strong_f">商談中</span></div>
</h1>
<p><?php echo get_post_meta($post->ID, 'comment', true); ?></p>
</div>
<div id="product-border" class="border"></div>
<div class="content flex clearfix">
<div class="product_detail_price">
<div class="product_detail_price_box border strong_f big clearfix">
<span class="title">本体価格</span>
<span class="price"><span class="num"><?php echo get_post_meta($post->ID, 'price', true); ?></span><span class="yen">万円（税抜）</span></span>
</div>
<span class="misc sml">別途、設置費用（運賃込み）が発生致します。</span>
</div>
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">用途</dt>
<dd class="product_detail_content"><?php $term = get_field('usage'); echo $term->name; ?></dd>
<dt class="product_detail_title box">寸法</dt>
<dd class="product_detail_content"><?php echo get_post_meta($post->ID, 'lwh', true); ?></dd>
<dt class="product_detail_title box">面積</dt>
<dd class="product_detail_content"><?php echo get_post_meta($post->ID, 'm2', true); ?>坪</dd>
</dl>
</div>
</div>
<div class="content">

<div class="slider responsive">
<div><a data-fancybox="gallery" href="/images/products/1/1.jpg" data-caption="画像1。ここに各画像のキャプションを入力します"><img src="/images/products/1/1.jpg"></a></div>
<div><a data-fancybox="gallery" href="/images/products/1/2.jpg" data-caption="画像2。ここに各画像のキャプションを入力します"><img src="/images/products/1/2.jpg"></a></div>
<div><a data-fancybox="gallery" href="/images/products/1/3.jpg" data-caption="画像3。ここに各画像のキャプションを入力します"><img src="/images/products/1/3.jpg"></a></div>
<div><a data-fancybox="gallery" href="/images/products/1/4.jpg" data-caption="画像4。ここに各画像のキャプションを入力します"><img src="/images/products/1/4.jpg"></a></div>
<div><a data-fancybox="gallery" href="/images/products/1/5.jpg" data-caption="画像5。ここに各画像のキャプションを入力します"><img src="/images/products/1/5.jpg"></a></div>
<div><a data-fancybox="gallery" href="/images/products/1/6.jpg" data-caption="画像6。ここに各画像のキャプションを入力します"><img src="/images/products/1/6.jpg"></a></div>
</div>
</div>
<div class="content">
<h3 class="border txt"><i class="fas fa-square"></i> 360度 パノラマ写真</h3>
<div class="panorama"><img src="/images/panorama.jpg" class="pv-pano"></div>
</div>
<div class="content">
<h3 class="border txt"><i class="fas fa-square"></i> 紹介動画</h3>
<div class="youtube">
<iframe width="560" height="315" src="https://www.youtube.com/embed/5DDpB5fsG6k?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</div>
<div class="content content_s">
<h3 class="border txt"><i class="fas fa-square"></i> 仕様</h3>
</div>
<div class="content flex clearfix">
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">商品コード</dt>
<dd class="product_detail_content"><?php the_field('code'); ?></dd>
<dt class="product_detail_title box">管理No.</dt>
<dd class="product_detail_content"><?php the_field('ctl_no'); ?></dd>
<dt class="product_detail_title box">メーカー</dt>
<dd class="product_detail_content"><?php the_field('maker'); ?></dd>
<dt class="product_detail_title box">メーカー形式</dt>
<dd class="product_detail_content"><?php the_field('maker_type'); ?></dd>
</dl>
</div>
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">年式</dt>
<dd class="product_detail_content"><?php the_field('y_type'); ?></dd>
<dt class="product_detail_title box">状態</dt>
<dd class="product_detail_content"><?php $term = get_field('status'); echo $term->name; ?></dd>
<dt class="product_detail_title box">本体重量</dt>
<dd class="product_detail_content"><?php the_field('weight'); ?></dd>
</dl>
</div>
</div>
<div class="content content_s">
<h3 class="border txt"><i class="fas fa-square"></i> 価格</h3>
</div>
<div class="content flex clearfix">
<div class="product_detail_price">
<div class="product_detail_price_box border strong_f big clearfix">
<span class="title">本体価格</span>
<span class="price"><span class="num"><?php echo get_post_meta($post->ID, 'price', true); ?></span><span class="yen">万円（税抜）</span></span>
</div>
<span class="misc sml">別途、設置費用（運賃込み）が発生致します。</span>
</div>
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">コメント</dt>
<dd class="product_detail_content"><?php the_field('staff_comment'); ?></dd>
</dl>
</div>
</div>
<div class="content">
<div id="product_detail_contact_box" class="border">
<h4>この商品に関するお問い合わせ</h4>
<div class="content flex clearfix">
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">保有場所</dt>
<dd class="product_detail_content">
<?php 
$objs = get_field('stock_point');
if($objs){
  foreach($objs as $obj){
    echo $obj->post_title;
    echo " ";
  }
}
?></dd>
<dt class="product_detail_title box">お問い合わせ先</dt>
<dd class="product_detail_content"><?php $term = get_field('req'); echo $term->post_title; ?></dd>
</dl>
</div>
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">電話番号</dt>
<dd class="product_detail_content num tel"><a href="tel:03-3517-3355"><?php the_field('tel'); ?></a></dd>
<dt class="product_detail_title box">担当者</dt>
<dd class="product_detail_content">
<?php
if(get_field('staff')){
  $user = get_field('staff');
  echo $user['nickname'];
}
?>
</dl>
</div>
</div>
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
<p id="links" class=""><a href="/">HOME</a> | <a href="/srs/_privacy.html">プライバシーポリシー</a> | <br><a href="commerce.html">特定商取引に関する表示</a> | <a href="sitemap.html">サイトマップ</a></p>
<p id="copy" class="xs">Copyright &copy; 2018 SRS Corporation. <br>All Rights Reserved.</p>
</div>
<div id="pagetop" class="srsd"><i class="fas fa-chevron-circle-up"></i> 上へ戻る</div>
</footer>
</div>

</section>
<link rel="stylesheet" href="/css/panorama_viewer.css">
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/slick.css">
<link rel="stylesheet" href="/css/slick-theme.css">
<link rel="stylesheet" href="/css/jquery.fancybox.min.css" />

<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="/js/jquery.debouncedresize.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/jquery.panorama_viewer.js"></script>
<script src="/js/common.js"></script>
<script>

$(".responsive").slick({dots:!1,infinite:!1,speed:300,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:700,settings:{slidesToShow:2,slidesToScroll:2,infinite:!1,dots:!0,arrows:!1}}]});
$("[data-fancybox]").fancybox({buttons:["close"]});
$(".panorama").panorama_viewer({repeat:!0,direction:"horizontal",animationTime:700,easing:"ease-out",overlay:!0});

</script>
<?php get_footer(); ?>
