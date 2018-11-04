<?php
/*
Template Name: office 
*/
?>
<?php get_header(); ?>
<body>
<?php
// ex) $query = new WP_Query(query_for_shoplist('sales_area01'));
function query_for_shoplist($sales_area){
  $args = array(
    'post_type' => 'shops',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
       'taxonomy' => 'shop_sales_area_cat',
       'field' => 'slug',
       'terms' => $sales_area
      )
    ),
    'meta_key' => 'postcode',
    'orderby' => 'meta_value',
    'order' => 'ASC'
  );
  return $args;
}
// check shop list by pref
//
function exist_shop_in_pref($slugname, $areatag){
  $prefs = get_terms(array('taxonomy' => 'pref_cat', 'slug' => $slugname, 'hide_empty' => false));
  $prefname = $prefs[0]->name;
  $ret = '<span>'.$prefname.'</span>';
  $args = array(
    'post_type' => 'shops',
    'post_status' => 'publish',
    'tax_query' => array(
      array(
        'taxonomy' => 'pref_cat',
        'field' => 'slug',
        'terms' => $slugname,
      )
    )
  );
  $query = new WP_query($args);
  if($query->have_posts()) : $query->the_post();
    $ret = '<a href="#'.$areatag.'">'.$prefname.'</a>';
  endif;
  return $ret;
}
?>

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
<li id="back" class="no-sp"><a href="/" class="disp_f">カテゴリトップに戻る</a></li>
<li class="text_c"><a href="/srs/_feature.html" class="disp_f">特徴</a></li>
<li class="text_c"><a href="/office" class="disp_f active">店舗情報</a></li>
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
<a href="/srs/_about" itemprop="url">
<span itemprop="title">エスアールエスのご紹介</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="/srs/_office" itemprop="url">
<span itemprop="title">店舗情報</span>
</a>
</li>
</ul>
</div>
</section>

<section id="misc" class="srsi_detail">
<div id="misc-title" class="content">
<h1 class="txt">店舗情報</h1>
<p>エスアールエスの拠点情報を地域別にご案内いたします</p>
</div>
<div id="misc-border" class="border"></div>

<div class="content">
<h2 class="border txt"><i class="fas fa-square"></i> エスアールエス営業拠点・ユニットハウス展示場リスト</h2>
<p>エスアールエスの拠点情報を地域別にご案内いたします。ご覧になりたいエリアを選択してください。<br>なお水色の行はブルーテック事業部の拠点です。</p>
<section id="map">
<div class="map_links" id="touhoku">
<a class="area_name strong_f" href="#touhoku-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 北海道・東北地方</a>
<div class="pref_box">
<?php print(exist_shop_in_pref('hokkaido','touhoku-list-title'));?>
<?php print(exist_shop_in_pref('iwate','touhoku-list-title'));?>
<?php print(exist_shop_in_pref('aomori','touhoku-list-title'));?>
<?php print(exist_shop_in_pref('miyagi','touhoku-list-title'));?>
<br class="no-sp">
<?php print(exist_shop_in_pref('akita','touhoku-list-title'));?>
<?php print(exist_shop_in_pref('yamagata','touhoku-list-title'));?>
<?php print(exist_shop_in_pref('fukushima','touhoku-list-title'));?>
</div>
</div>
<div class="map_links" id="kanto">
<a class="area_name strong_f" href="#kanto-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 関東地方</a>
<div class="pref_box">
<?php print(exist_shop_in_pref('ibaraki','kanto-list-title'));?>
<?php print(exist_shop_in_pref('tochigi','kanto-list-title'));?>
<?php print(exist_shop_in_pref('gunma','kanto-list-title'));?>
<?php print(exist_shop_in_pref('saitama','kanto-list-title'));?>
<br class="no-sp">
<?php print(exist_shop_in_pref('chiba','kanto-list-title'));?>
<?php print(exist_shop_in_pref('tokyo','kanto-list-title'));?>
<?php print(exist_shop_in_pref('kanagawa','kanto-list-title'));?>
</div>
</div>
<div class="map_links" id="hokuriku">
<a class="area_name strong_f" href="#hokuriku-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 北陸/信越地方</a>
<div class="pref_box">
<?php print(exist_shop_in_pref('niigata','hokuriku-list-title'));?>
<?php print(exist_shop_in_pref('toyama','hokuriku-list-title'));?>
<?php print(exist_shop_in_pref('ishikawa','hokuriku-list-title'));?>
<?php print(exist_shop_in_pref('fukui','hokuriku-list-title'));?>
</div>
</div>
<div class="map_links" id="tokai">
<a class="area_name strong_f" href="#tokai-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 東海地方</a>
<div class="pref_box">
<?php print(exist_shop_in_pref('yamanashi','tokai-list-title'));?>
<?php print(exist_shop_in_pref('nagano','tokai-list-title'));?>
<?php print(exist_shop_in_pref('gifu','tokai-list-title'));?>
<?php print(exist_shop_in_pref('shizuoka','tokai-list-title'));?>
<?php print(exist_shop_in_pref('aichi','tokai-list-title'));?>
</div>
</div>
<div class="map_links" id="kinki">
<a class="area_name strong_f" href="#kinki-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 近畿地方</a>
<div class="pref_box">
<?php print(exist_shop_in_pref('mie','kinki-list-title'));?>
<?php print(exist_shop_in_pref('shiga','kinki-list-title'));?>
<?php print(exist_shop_in_pref('kyoto','kinki-list-title'));?>
<?php print(exist_shop_in_pref('osaka','kinki-list-title'));?>
<br class="no-sp">
<?php print(exist_shop_in_pref('hyogo','kinki-list-title'));?>
<?php print(exist_shop_in_pref('nara','kinki-list-title'));?>
<?php print(exist_shop_in_pref('wakayama','kinki-list-title'));?>
<br class="no-sp">
</div>
</div>
<div class="map_links" id="chugoku">
<a class="area_name strong_f" href="#chugoku-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 中国・四国地方</a>
<div class="pref_box">
<?php print(exist_shop_in_pref('tottori','chugoku-list-title'));?>
<?php print(exist_shop_in_pref('shimane','chugoku-list-title'));?>
<?php print(exist_shop_in_pref('okayama','chugoku-list-title'));?>
<?php print(exist_shop_in_pref('hiroshima','chugoku-list-title'));?>
<?php print(exist_shop_in_pref('yamaguchi','chugoku-list-title'));?>
<br class="no-sp">
<?php print(exist_shop_in_pref('tokushima','chugoku-list-title'));?>
<?php print(exist_shop_in_pref('kagawa','chugoku-list-title'));?>
<?php print(exist_shop_in_pref('kochi','chugoku-list-title'));?>
<?php print(exist_shop_in_pref('ehime','chugoku-list-title'));?>
</div>
</div>
<div class="map_links" id="kyusyu">
<a class="area_name strong_f" href="#kyusyu-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 九州地方</a>
<div class="pref_box">
<?php print(exist_shop_in_pref('fukuoka','kyusyu-list-title'));?>
<?php print(exist_shop_in_pref('saga','kyusyu-list-title'));?>
<?php print(exist_shop_in_pref('nagasaki','kyusyu-list-title'));?>
<br class="no-sp">
<?php print(exist_shop_in_pref('kumamoto','kyusyu-list-title'));?>
<?php print(exist_shop_in_pref('oita','kyusyu-list-title'));?>
<?php print(exist_shop_in_pref('miyazaki','kyusyu-list-title'));?>
<br class="no-sp">
<?php print(exist_shop_in_pref('kagoshima','kyusyu-list-title'));?>
<?php print(exist_shop_in_pref('okinawa','kyusyu-list-title'));?>
</div>
</div>
</section>

<?php
$array = array(
  'touhoku' => ['北海道・東北地方','sales_area01'],
  'kanto' => ['関東地方','sales_area03'],
  'hokuriku' => ['北陸・信越地方','sales_area02'],
  'tokai' => ['東海地方','sales_area04'],
  'kinki' => ['近畿地方','sales_area05'],
  'chugoku' => ['中国・四国地方','sales_area06'],
  'kyusyu' => ['九州地方','sales_area07'],
);
foreach($array as $key => $value ):
  print('<h3 id="'.$key.'-list-title" class="office_list_title" >'.$value[0].'</h3>');
  print('<section id="'.$key.'-list" class="table office_list">');
  print('<div class="row area_name">');
  print('<div class="cell">事業所名</div>');
  print('<div class="cell">住所</div>');
  print('<div class="cell">電話番号</div>');
  print('<div class="cell">FAX</div>');
  print('<div class="cell">地図</div>');
  print('</div>');
  $query = new WP_Query(query_for_shoplist($value[1]));
  while($query->have_posts()) : $query->the_post();
?>
<div class="row">
  <div class="cell"><?php the_title();?></div>
  <div class="cell"><?php the_field('postcode');?> <?php the_field('address'); ?> </div>
  <div class="cell" label="TEL:"><?php the_field('tel'); ?></div>
  <div class="cell" label="FAX:"><?php the_field('fax'); ?></div>
  <div class="cell">
  <a class="popup-gmaps" href="https://maps.google.com/maps?q=test@<?php the_field('longitude'); ?>,<?php the_field('latitude');?>&iwloc=A&hl=ja&z=18">
      <i class="fas fa-map-marker-alt fa-fw"></i><span> GoogleMapで見る</span>
    </a>
  </div>
</div>
<?php
  endwhile;
?>
</section>
<?php
  endforeach;
?>
</div>
</section>

<section id="contact">
<div class="content">
<h2 class="disp_f text_l"><i class="fas fa-phone-square"></i> お問い合わせ</h2>
<div id="contact-box">
<p id="contact-text">「中古ユニットハウス」「アタッチメント」「高所作業車」等に関するご質問・ご相談は最寄りの営業所までお問い合わせください。</p>
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
<p id="links" class=""><a href="/">HOME</a> | <a href="/srs/_privacy">プライバシーポリシー</a> | <a href="/srs/_sitemap">サイトマップ</a></p>
<p id="copy" class="xs">Copyright &copy; 2018 SRS Corporation. <br>All Rights Reserved.</p>
</div>
<div id="pagetop" class="srsd"><i class="fas fa-chevron-circle-up"></i> 上へ戻る</div>
</footer>
</div>

</section>

<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/magnific-popup.css">
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="/js/jquery.debouncedresize.min.js"></script>
<script src="/js/common.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.popup-gmaps').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });
  });
</script>

<?php get_footer(); ?>
