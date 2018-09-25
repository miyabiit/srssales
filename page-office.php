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
<li id="back" class="no-sp"><a href="/" class="disp_f">ホームに戻る</a></li>
<li class="text_c"><a href="/srs/_feature" class="disp_f">特徴</a></li>
<li class="text_c"><a href="/office" class="disp_f active">店舗情報</a></li>
<li class="text_c"><a href="/srs/_corporate" class="disp_f">会社案内</a></li>
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
<a href="#touhoku-list-title">北海道</a>
<span>青森県</span>
<a href="#touhoku-list-title">岩手県</a>
<a href="#touhoku-list-title">宮城県</a><br class="no-sp">
<span>秋田県</span>
<span>山形県</span>
<a href="#touhoku-list-title">福島県</a>
</div>
</div>
<div class="map_links" id="kanto">
<a class="area_name strong_f" href="#kanto-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 関東地方</a>
<div class="pref_box">
<a href="#kanto-list-title">茨城県</a>
<a href="#kanto-list-title">栃木県</a>
<span>群馬県</span>
<a href="#kanto-list-title">埼玉県</a><br class="no-sp">
<a href="#kanto-list-title">千葉県</a>
<a href="#kanto-list-title">東京都</a>
<a href="#kanto-list-title">神奈川県</a>
</div>
</div>
<div class="map_links" id="hokuriku">
<a class="area_name strong_f" href="#hokuriku-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 北陸/信越地方</a>
<div class="pref_box">
<a href="#hokuriku-list-title">新潟県</a>
<span>富山県</span>
<span>石川県</span>
<span>福井県</span>
</div>
</div>
<div class="map_links" id="tokai">
<a class="area_name strong_f" href="#tokai-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 東海地方</a>
<div class="pref_box">
<a href="#tokai-list-title">山梨県</a>
<a href="#tokai-list-title">長野県</a>
<a href="#tokai-list-title">岐阜県</a>
<a href="#tokai-list-title">静岡県</a>
<a href="#tokai-list-title">愛知県</a>
</div>
</div>
<div class="map_links" id="kinki">
<a class="area_name strong_f" href="#kinki-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 近畿地方</a>
<div class="pref_box">
<span>三重県</span>
<a href="#kinki-list-title">滋賀県</a>
<span>京都府</span>
<a href="#kinki-list-title">大阪府</a><br class="no-sp">
<a href="#kinki-list-title">兵庫県</a>
<a href="#kinki-list-title">奈良県</a>
<span>和歌山県</span>
</div>
</div>
<div class="map_links" id="chugoku">
<a class="area_name strong_f" href="#chugoku-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 中国・四国地方</a>
<div class="pref_box">
<span>鳥取県</span>
<span>島根県</span>
<span>岡山県</span>
<a href="#chugoku-list-title">広島県</a>
<span>山口県</span><br class="no-sp">
<span>徳島県</span>
<span>香川県</span>
<span>高知県</span>
<span>愛媛県</span>
</div>
</div>
<div class="map_links" id="kyusyu">
<a class="area_name strong_f" href="#kyusyu-list-title"><i class="fas fa-arrow-circle-right fa-fw"></i> 九州地方</a>
<div class="pref_box">
<a href="#kyusyu-list-title">福岡県</a>
<span>佐賀県</span>
<span>長崎県</span><br class="no-sp">
<a href="#kyusyu-list-title">熊本県</a>
<a href="#kyusyu-list-title">大分県</a>
<span>宮崎県</span><br class="no-sp">
<a href="#kyusyu-list-title">鹿児島県</a>
<span>沖縄県</span>
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
<div class="cell"><a href="" target="_blank"><i class="fas fa-map-marker-alt fa-fw"></i><span> GoogleMapで見る</span></a></div>
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
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="/js/jquery.debouncedresize.min.js"></script>
<script src="/js/common.js"></script>

<?php get_footer(); ?>
