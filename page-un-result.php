<?php
/*
Template Name: un-result 
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
<li class="text_c"><a href="/un-search" class="disp_f active">商品検索</a></li>
<li class="text_c"><a href="/srs/_un-guide-top.html" class="disp_f">ご利用ガイド</a></li>
<li class="text_c"><a href="/srs/_un-info-top.html" class="disp_f">ご案内</a></li>
<li class="text_c"><a href="/un-contact" class="disp_f">お問い合わせ</a></li>
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
<a href="/un-search" itemprop="url">
<span itemprop="title">商品検索メニュー</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/un-result" itemprop="url">
<span itemprop="title">検索結果</span>
</a>
</li>
</ul>
</div>
</section>
<?php
  $args = query_for_taxonomy('units', array('un_tubo_cat', 'un_usage_cat', 'un_price_range_cat','pref_cat','shop_sales_area_cat','shop_pref_area_cat','status_cat'),array('req'));
  $wp_query = new WP_Query();
  $wp_query->query($args);
?>

<section class="search-results-pagination">
<div class="content flex">
<div class="hits flex strong_f"><!-- <span class="num"><?php echo $wp_query->found_posts; ?></span>  件 ヒットしました --><span class="more unit"><a href="/un-search/?<?php echo http_build_query($_GET); ?>"><i class="fas fa-filter"></i>もっと絞り込む</a></span></div>
<div class="pagination">
<?php
    $big = 9999999999;
    $arg = array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $wp_query->max_num_pages,
        'prev_text' => __('<i class="fas fa-angle-double-left"></i>'),
        'next_text' => __('<i class="fas fa-angle-double-right"></i>')
    );
    echo paginate_links($arg);
?>
</div>
</div>
</section>
<section id="search-results">
<div class="content">


<?php
while( $wp_query->have_posts()) : $wp_query->the_post();
?>
<section class="searched-product product_data_unit">
<h2>
<span class="product_name"><?php the_title(); ?></span>
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
</h2>
<p><?php echo get_post_meta($post->ID, 'comment', true); ?></p>
<div class="searched_product_data flex">
<?php
$img = get_field('img1');
if(!empty($img)) echo '<div class="product_image"><img src="' . $img['url'] . '"></div>';
?>
<div class="product_data">
<div class="product_detail flex clearfix">
<dl>
<dt class="product_data_title">用途</dt>
<dd class="product_data_content"><?php $term = get_field('usage'); echo $term->name; ?></dd>
<dt class="product_data_title">寸法</dt>
<dd class="product_data_content"><?php echo get_post_meta($post->ID, 'lwh', true); ?></dd>
</dl>
<dl>
<dt class="product_data_title">面積</dt>
<dd class="product_data_content"><?php echo get_post_meta($post->ID, 'm2', true); ?>坪</dd>
<dt class="product_data_title">本体価格</dt>
<dd class="product_data_content"><span class="num"><?php the_field('price'); ?></span>万円（税抜）</dd>
</dl>
</div>
<h3><i class="fas fa-square"></i> 仕様</h3>
<div class="product_spec">
<div class="product_detail flex clearfix">
<dl>
<dt class="product_data_title">商品コード</dt>
<dd class="product_data_content"><?php the_field('code'); ?></dd>
<dt class="product_data_title">メーカー</dt>
<dd class="product_data_content"><?php the_field('maker'); ?></dd>
<dt class="product_data_title">本体重量</dt>
<dd class="product_data_content"><?php the_field('weight'); ?></dd>
<dt class="product_data_title">状態</dt>
<dd class="product_data_content"><?php $term = get_field('status'); echo $term->name; ?></dd>
</dl>
<dl>
<dt class="product_data_title">管理No.</dt>
<dd class="product_data_content"><?php the_field('ctl_no'); ?></dd>
<dt class="product_data_title">メーカー型式</dt>
<dd class="product_data_content"><?php the_field('maker_type'); ?></dd>
<dt class="product_data_title">年式</dt>
<dd class="product_data_content"><?php the_field('y_type'); ?></dd>
</dl>
</div>
</div>
</div>
</div>
<div class="product_contact flex">
<div class="contact_info"><span class="contact strong_f">お問い合わせ</span><i class="fas fa-phone-square"></i><span class="num"><a href="tel:<?php the_field('tel'); ?>"><?php the_field('tel');?></a></span></div>
<div class="product_see_more unit"><a href="/unitproducts" class="btn strong_f"><a href="<?php echo get_permalink($post->ID );?>" title="<?php echo get_the_title($post->ID);?>">詳細を見る <i class="fas fa-angle-double-right"></i></a></div>
</div>
</section>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

</div>
</section>

<section class="search-results-pagination">
<div class="content flex">
<div class="hits flex strong_f"><!-- <span class="num"><?php echo $wp_query->found_posts; ?></span>  件 ヒットしました --><span class="more unit"><a href="/un-search/?<?php echo http_build_query($_GET); ?>"><i class="fas fa-filter"></i>もっと絞り込む</a></span></div>
<div class="pagination">
<?php
    $big = 9999999999;
    $arg = array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'current' => max( 1, get_query_var('paged') ),
        'total'   => $wp_query->max_num_pages,
        'prev_text' => __('<i class="fas fa-angle-double-left"></i>'),
        'next_text' => __('<i class="fas fa-angle-double-right"></i>')
    );
    echo paginate_links($arg);
?>
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
