<?php
/*
Template Name: newsarch 
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

<section id="sub-menu" class="srsi">
<div class="content clearfix">
<div id="sub_title" class="no-pc strong_f">エスアールエスのご紹介</div>
<nav>
<ul id="sub_menu" class="clearfix">
<li id="back" class="no-sp"><a href="/" class="disp_f">カテゴリトップに戻る</a></li>
<li class="text_c"><a href="/srs/_feature.html" class="disp_f">特徴</a></li>
<li class="text_c"><a href="/srs/_office.html" class="disp_f">店舗情報</a></li>
<li class="text_c"><a href="/srs/_corporate.html" class="disp_f">会社案内</a></li>
<li class="text_c"><a href="/contact" class="disp_f">お問い合わせ</a></li>
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
<a href="/newsarch" itemprop="url">
<span itemprop="title">お知らせ</span>
</a>
</li>
</ul>
</div>
</section>

<section id="misc" class="srsi_detail">
<div id="misc-title" class="content">
<h1 class="txt">お知らせ</h1>
</div>
<div id="misc-border" class="border"></div>

<div class="content clearfix">
<ul id="news-arch-list" class="float_l w75">
<?php 
$query = new WP_Query(array(
  'post_type' => 'news',
  'posts_per_page' => 10,
  'tax_query' => array(
    array(
      'taxonomy' => 'products_cat',
      'field' => 'slug',
      'terms' => array('products_all','products_units','products_pms','products_bts')
    )
  ),
  'orderby' => 'date',
  'order' => 'DESC'
));
while($query->have_posts()) : $query->the_post();
?>
  <li><span class="date"><?php the_time("Y年m月d日 l  ");?></span><a href="<?php the_permalink() ?>"><?php the_title();?></a></li>
<?php endwhile; ?>
</ul>
<!-- archive block start -->
<div id="news-archives" class="float_r w25_100">
<h2 class="srsi_t">アーカイブ</h2>
<?php
$year_prev = null;
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                    YEAR( post_date ) AS year,
                                    COUNT( id ) as post_count FROM $wpdb->posts
                                    WHERE post_status = 'publish' and post_date <= now( )
                                    and post_type = 'news'
                                    GROUP BY month , year
                                    ORDER BY post_date DESC");
foreach($months as $month) :
$year_current = $month->year;
if ($year_current != $year_prev){
if ($year_prev != null){?>
            </ul></div>
        <?php } ?>
<div><h4><?php echo $month->year; ?>年</h4>
<ul id="news-list-sub">
    <?php } ?>
    <li>
        <a href="<?php bloginfo('url') ?>/date/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
            <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月
            (<?php echo $month->post_count; ?>)
        </a>
    </li>
    <?php $year_prev = $year_current;
    endforeach; ?>
</ul></div>
</div>
<!-- archive block end -->
</div></div>
</section>

<section id="footer" class="srsd">
<div class="content">
<footer class="clearfix flex">
<div id="company-info">
<p id="company" class="flex"><img src="/images/srs.png"><span>高所作業車、特殊作業車、アタッチメント、ユニットハウスのことなら<span id="company-name">エスアールエス株式会社</span></span></p>
</div>
<div>
<p id="links" class=""><a href="/">HOME</a> | <a href="/srs/_privacy.html">プライバシーポリシー</a> |  <a href="/srs/_sitemap.html">サイトマップ</a></p>
<p id="copy" class="xs">Copyright &copy; 2019 SRS Corporation. <br>All Rights Reserved.</p>
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
