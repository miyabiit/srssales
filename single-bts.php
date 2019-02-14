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
<div id="sub_title" class="no-pc strong_f">アタッチメント</div>
<nav>
<ul id="sub_menu" class="clearfix">
<li id="back" class="no-sp"><a href="/btproducts" class="disp_f">カテゴリトップに戻る</a></li>
<li class="text_c"><a href="/bt-search" class="disp_f">商品検索</a></li>
<li class="text_c"><a href="/srs/_bt-guide-top.html" class="disp_f">ご利用ガイド</a></li>
<li class="text_c"><a href="/srs/_bt-info-top.html" class="disp_f">ご案内</a></li>
<li class="text_c">
<a href="/bt-contact?goods_title=<?php the_title();?>&goods_code=<?php the_field('code');?>" class="disp_f">お問い合わせ</a>
</li>
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
<a href="/bt-products" itemprop="url">
<span itemprop="title"><?php the_title(); ?></span>
</a>
</li>
</ul>
</div>
</section>

<section id="print-header">
<div id="print-header-company-info">
<p id="print-header-company"><img src="/images/srs.png"><span>高所作業車、特殊作業車、アタッチメント、ユニットハウスのことなら<span id="print-header-company-name">エスアールエス株式会社</span></span></p>
</div>
</section>

<section id="product-detail" class="lift_detail">
<div id="product-title" class="content">
<h1 class="txt"><?php the_title(); ?>
<?php
$terms = get_the_terms($post->ID, 'mark_label_cat');
$tags = [];
if($terms) foreach($terms as $term)array_push($tags, $term->slug);
if(in_array("newone",$tags)) print '<span class="product_list_sign red strong_f">NEW</span>';
if(in_array("recommend",$tags)) print '<span class="product_list_sign orange strong_f">おすすめ</span>';
if(in_array("goodone",$tags)) print '<span class="product_list_sign blue strong_f">美品</span>';
if(in_array("nowship",$tags)) print '<span class="product_list_sign green strong_f">即出荷</span>';
if(in_array("onsale",$tags)) print '<span class="product_list_sign gray strong_f">商談中</span>';
if(in_array("condition",$tags)) print '<span class="product_list_sign gray strong_f">快適</span>';
?>
</h1>
<p><?php the_field('comment'); ?></p>
</div>
<div id="product-border" class="border"></div>
<div class="content clearfix">
<div id="product-data">
<div class="product_detail_price">
<div class="product_detail_price_box border strong_f big clearfix">
<span class="title">本体価格</span>
<span class="price"><span class="num"><?php the_field('price'); ?></span><span class="yen">万円（税抜）</span></span>
</div>
<span class="misc sml">別途、設置費用（運賃込み）が発生致します。</span>
</div>
<div class="product_detail_data">
<dl>
<?php
$term = get_field('category');
if(strcmp($term->slug,'goods01') == 0){
?>
<dt class="product_detail_title box">用途</dt>
<dd class="product_detail_content"><?php the_field('method'); ?></dd>
<dt class="product_detail_title box">メーカー</dt>
<dd class="product_detail_content"><?php the_field('maker'); ?></dd>
<dt class="product_detail_title box">メーカー形式</dt>
<dd class="product_detail_content"><?php the_field('maker_type'); ?></dd>
<dt class="product_detail_title box">商品コード</dt>
<dd class="product_detail_content"><?php the_field('code'); ?></dd>
<?php
}else{
?>
<dt class="product_detail_title box">用途</dt>
<dd class="product_detail_content"><?php the_field('method'); ?></dd>
<dt class="product_detail_title box">メーカー</dt>
<dd class="product_detail_content"><?php the_field('maker'); ?></dd>
<dt class="product_detail_title box">メーカー形式</dt>
<dd class="product_detail_content"><?php the_field('maker_type'); ?></dd>
<?php
}
?>
</dl>
</div>
</div>
<div id="product-image-box">
<?php
$img1 = get_field('img1');
if(!empty($img1)){
  $url1 = $img1['url'];
  $caption1 = $img1['caption'];
?>
  <a id="product-image-link" data-fancybox="gallery" href="<?php echo $url1; ?>" data-image-caption="<?php echo $caption1; ?>">
    <img id="product-image" src="<?php echo $url1; ?>">
  </a>
  <div id="product-image-caption" class="sml"><?php echo $caption1; ?></div>
<?php
}
?>
</div>
</div>
<div class="content">

<div id="produt-thumbnails" class="clearfix">
<?php echo view_thumbnail('img1', true); ?> 
<?php echo view_thumbnail('img2', false); ?> 
<?php echo view_thumbnail('img3', false); ?> 
<?php echo view_thumbnail('img4', false); ?> 
<?php echo view_thumbnail('img5', false); ?> 
<?php echo view_thumbnail('img6', false); ?> 
<?php echo view_thumbnail('img7', false); ?> 
<?php echo view_thumbnail('img8', false); ?> 
<?php echo view_thumbnail('img9', false); ?> 
<?php echo view_thumbnail('img10', false); ?> 
<?php echo view_thumbnail('img11', false); ?> 
<?php echo view_thumbnail('img12', false); ?> 
<?php echo view_thumbnail('img13', false); ?> 
<?php echo view_thumbnail('img14', false); ?> 
<?php echo view_thumbnail('img15', false); ?> 
<?php echo view_thumbnail('img16', false); ?> 
<?php echo view_thumbnail('img17', false); ?> 
<?php echo view_thumbnail('img18', false); ?> 
<?php echo view_thumbnail('img19', false); ?> 
<?php echo view_thumbnail('img20', false); ?> 
<?php echo view_thumbnail('img21', false); ?> 
<?php echo view_thumbnail('img22', false); ?> 
<?php echo view_thumbnail('img23', false); ?> 
<?php echo view_thumbnail('img24', false); ?> 
</div>
</div>
<div id="product-panorama" class="content">
<?php
$panorama = get_field('panorama');
if(!empty($panorama)){
  $url = $panorama['url'];
?>
  <h3 class="border txt"><i class="fas fa-square"></i>360度 パノラマ写真</h3>
  <div class="panorama"><img src="<?php echo $url; ?>" class="pv-pano"></div>
<?php
}
?>
</div>
<?php
if(get_field('youtube')){
?>
<div id="product-movie" class="content">
<h3 class="border txt"><i class="fas fa-square"></i> 紹介動画</h3>
<div class="youtube">
<iframe width="560" height="315" src="<?php the_field('youtube'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</div>
<?php } ?>
<div class="content content_s">
<h3 class="border txt"><i class="fas fa-square"></i> 仕様</h3>
</div>
<div class="content flex clearfix">
<div class="product_detail_data">
<dl>
<?php
$term = get_field('category');
if(strcmp($term->slug,'goods01') == 0){
?>
<dt class="product_detail_title box">作業床高さ(m)</dt>
<dd class="product_detail_content"><?php the_field('height'); ?></dd>
<dt class="product_detail_title box">積載荷重(kg)</dt>
<dd class="product_detail_content"><?php the_field('load_weight'); ?></dd>
<dt class="product_detail_title box">車両重量(kg)</dt>
<dd class="product_detail_content"><?php the_field('weight'); ?></dd>
<dt class="product_detail_title box">状態</dt>
<dd class="product_detail_content"><?php $term_id = get_field('status'); $term = get_term($term_id, 'status_cat'); echo $term->name; ?></dd>
</dl>
</div>
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">寸法(mm) : WxDxH</dt>
<dd class="product_detail_content"><?php the_field('lwh'); ?></dd>
<dt class="product_detail_title box">駆動方法</dt>
<dd class="product_detail_content"><?php $term = get_field('usage'); echo $term->name; ?></dd>
<dt class="product_detail_title box">年式</dt>
<dd class="product_detail_content"><?php the_field('y_type'); ?></dd>
<dt class="product_detail_title box">在庫台数</dt>
<dd class="product_detail_content"><?php the_field('amount'); ?>台</dd>
<?php
}else{
?>
<dt class="product_detail_title box">商品コード</dt>
<dd class="product_detail_content"><?php the_field('code'); ?></dd>
<dt class="product_detail_title box">状態</dt>
<dd class="product_detail_content"><?php $term_id = get_field('status'); $term = get_term($term_id, 'status_cat'); echo $term->name; ?></dd>
</dl>
</div>
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">サイズ</dt>
<dd class="product_detail_content"><?php the_field('size'); ?></dd>
<dt class="product_detail_title box">本体重量(kg)</dt>
<dd class="product_detail_content"><?php the_field('weight'); ?></dd>
<dt class="product_detail_title box">在庫台数</dt>
<dd class="product_detail_content"><?php the_field('amount'); ?>台</dd>

<?php
}
?>
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
<span class="price"><span class="num"><?php the_field('price'); ?></span><span class="yen">万円（税抜）</span></span>
</div>
<span class="misc sml">別途、設置費用（運賃込み）が発生致します。</span>
</div>
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">コメント</dt>
<dd class="product_detail_content w100"><?php the_field('staff_comment'); ?></dd>
</dl>
</div>
</div>
<div class="content">
<div id="product_detail_contact_box" class="border mgn_btm40">
<h4>この商品に関するお問い合わせ</h4>
<div class="content flex clearfix">
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">保有場所</dt>
<dd class="product_detail_content"><?php $term = get_field('stock_point'); echo $term->post_title; ?></dd>
<dt class="product_detail_title box">お問い合わせ先</dt>
<dd class="product_detail_content"><?php $term = get_field('req'); echo $term->post_title; ?></dd>
</dl>
</div>
<div class="product_detail_data">
<dl>
<dt class="product_detail_title box">電話番号</dt>
<dd class="product_detail_content num tel"><a href="tel:<?php the_field('tel');?>"><?php the_field('tel'); ?></a></dd>
</dl>
</div>
</div>
</div>
<div id="go-print" class="text_c mgn_btm40">
<a href="#" onclick="window.print(); return false;" class="btn lift"><i class="fas fa-print"></i> 印刷する</a>
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
<link rel="stylesheet" href="/css/panorama_viewer.css">
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/slick.css">
<link rel="stylesheet" href="/css/slick-theme.css">
<link rel="stylesheet" href="/css/jquery.fancybox.min.css" />

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="/js/jquery.debouncedresize.min.js"></script>
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/jquery.panorama_viewer.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/common.js"></script>
<script>

$(".panorama").panorama_viewer({repeat:!0,direction:"horizontal",animationTime:700,easing:"ease-out",overlay:!0});
$('.swap_img').on('click',function(){
	var t = $(this);
	var img = $('#product-image');
	var url = t.attr('href');
	var cap = t.attr('data-image-caption');
	$('.swap_img').removeClass('active').attr('data-fancybox','gallery');
	t.addClass('active');
	t.attr('data-fancybox','');
	$('#product-image').attr('src',url);
	$('#product-image-caption').text(cap);
	$('#product-image-link').attr('href',url).attr('data-image-caption',cap);
	return false;
});
</script>

<?php get_footer(); ?>
