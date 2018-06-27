<?php
/*
Template Name: pm-search 
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
<li class="text_c unit"><a href="unitproducts" class="disp_f">ユニットハウス</a></li>
<li class="text_c atch"><a href="pmproducts" class="disp_f">アタッチメント</a></li>
<li class="text_c lift"><a href="btproducts" class="disp_f">高所作業車 他</a></li>
<li class="text_c srsi"><a href="/srs/_about.html" class="disp_f">エスアールエスのご紹介</a></li>
</ul>
</nav>
</header>
</div>
</section>

<section id="sub-menu" class="atch">
<div class="content clearfix">
<div id="sub_title" class="no-pc strong_f">アタッチメント</div>
<nav>
<ul id="sub_menu" class="clearfix">
<li id="back" class="no-sp"><a href="/" class="disp_f">ホームに戻る</a></li>
<li class="text_c"><a href="pm-search" class="disp_f active">商品検索</a></li>
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
<a href="/" itemprop="url">
<span itemprop="title">ホーム</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="pmproducts" itemprop="url">
<span itemprop="title">アタッチメント</span>
</a> >
</li>
<li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="pm-search" itemprop="url">
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
<div class="search-hits strong_f">該当件数 <span class="num">0005</span> 件</div><button type="submit" id="search-all" class="btn atch disp_f"><i class="fas fa-search"></i></button>
</div>

<div class="search-check-selection clearfix">
<div class="check-selections clearfix">
<div class="search-button"><div class="search-hits strong_f">該当件数 <span class="num">0005</span> 件</div><button type="submit" id="search-all" class="btn atch disp_f"><i class="fas fa-search"></i> アタッチメントを探す</button></div>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="atch strong_f selection_title">商品分類で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="atch_category_all" /> <label for="atch_category_all" class="atch_t strong_f big mdl">すべて選択</label>
        <ul class="choices clearfix">
            <li><input type='checkbox' name="atch_category[]" id="atch_category_1" value="解体用アタッチメント" /> <label for="atch_category_1">解体用アタッチメント</label></li>
            <li><input type='checkbox' name="atch_category[]" id="atch_category_2" value="バケット類" /> <label for="atch_category_2">バケット類</label></li>
            <li><input type='checkbox' name="atch_category[]" id="atch_category_3" value="フォーク" /> <label for="atch_category_3">フォーク</label></li>
            <li><input type='checkbox' name="atch_category[]" id="atch_category_4" value="その他" /> <label for="atch_category_4">その他</label></li>
            <li><input type='checkbox' name="atch_category[]" id="atch_category_5" value="特殊アタッチメント" /> <label for="atch_category_5">特殊アタッチメント</label></li>
        </ul>
    </li>
</ul>
<button type="submit" class="btn btn_s atch strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="atch strong_f selection_title">クラスで探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="class_all" /> <label for="class_all" class="atch_t strong_f big mdl">すべて選択</label>
        <ul class="choices clearfix">
            <li><input type='checkbox' name="class[]" id="class_1" value="0.2以下" /> <label for="class_1">0.2以下</label></li>
            <li><input type='checkbox' name="class[]" id="class_2" value="0.25" /> <label for="class_2">0.25</label></li>
            <li><input type='checkbox' name="class[]" id="class_3" value="0.45" /> <label for="class_3">0.45</label></li>
            <li><input type='checkbox' name="class[]" id="class_4" value="0.7" /> <label for="class_4">0.7</label></li>
            <li><input type='checkbox' name="class[]" id="class_5" value="1.2以上" /> <label for="class_5">1.2以上</label></li>
        </ul>
    </li>
</ul>
<button type="submit" class="btn btn_s atch strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="atch strong_f selection_title">価格で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="price_all" /> <label for="price_all" class="atch_t strong_f big mdl">すべて選択</label>
        <ul class="choices clearfix">
            <li><input type='checkbox' name="price[]" id="price_1" value="10万円未満" /> <label for="price_1">10万円未満</label></li>
            <li><input type='checkbox' name="price[]" id="price_2" value="10～20万円未満" /> <label for="price_2">10～20万円未満</label></li>
            <li><input type='checkbox' name="price[]" id="price_3" value="20～30万円未満" /> <label for="price_3">20～30万円未満</label></li>
            <li><input type='checkbox' name="price[]" id="price_4" value="30～40万円未満" /> <label for="price_4">30～40万円未満</label></li>
            <li><input type='checkbox' name="price[]" id="price_5" value="40～50万円未満" /> <label for="price_5">40～50万円未満</label></li>
            <li><input type='checkbox' name="price[]" id="price_6" value="50～75万円未満" /> <label for="price_6">50～75万円未満</label></li>
            <li><input type='checkbox' name="price[]" id="price_7" value="75～100万円未満" /> <label for="price_7">75～100万円未満</label></li>
            <li><input type='checkbox' name="price[]" id="price_8" value="100万円以上" /> <label for="price_8">100万円以上</label></li>
        </ul>
    </li>
</ul>
<button type="submit" class="btn btn_s atch strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="atch strong_f selection_title">販売店で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="dealer_all" /> <label for="dealer_all" class="atch_t strong_f big mdl">すべて選択</label>
        <ul class="clearfix">
            <li class="choice_area"><input type='checkbox' id="dealer_hokkaido" /><label for="dealer_hokkaido" class="atch_t strong_f big">北海道/東北</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="dealer[]" id="dealer_1" value="札幌営業所" /> <label for="dealer_1">札幌営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_2" value="仙台営業所" /> <label for="dealer_2">仙台営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_3" value="仙台ハウスヤード" /> <label for="dealer_3">仙台ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_4" value="古川ハウスヤード" /> <label for="dealer_4">古川ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_5" value="名取展示場" /> <label for="dealer_5">名取展示場</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_6" value="盛岡営業所" /> <label for="dealer_6">盛岡営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_7" value="郡山営業所" /> <label for="dealer_7">郡山営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_8" value="浪江出張所" /> <label for="dealer_8">浪江出張所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_9" value="郡山ハウスヤード" /> <label for="dealer_9">郡山ハウスヤード</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="dealer_hokuriku" /><label for="dealer_hokuriku" class="atch_t strong_f big">北陸/信越</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="dealer[]" id="dealer_10" value="新潟営業所" /> <label for="dealer_10">新潟営業所</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="dealer_kanto" /><label for="dealer_kanto" class="atch_t strong_f big">関東</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="dealer[]" id="dealer_11" value="プロマックス事業部本社" /> <label for="dealer_11">プロマックス事業部本社</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_12" value="東日本ブロックハウスヤード" /> <label for="dealer_12">東日本ブロックハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_13" value="宇都宮営業所" /> <label for="dealer_13">宇都宮営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_14" value="水戸営業所" /> <label for="dealer_14">水戸営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_15" value="水戸ハウスヤード" /> <label for="dealer_15">水戸ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_16" value="さいたま営業所" /> <label for="dealer_16">さいたま営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_17" value="柏ハウスヤード" /> <label for="dealer_17">柏ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_18" value="白岡展示場" /> <label for="dealer_18">白岡展示場</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_19" value="市川営業所" /> <label for="dealer_19">市川営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_20" value="千葉ハウスヤード" /> <label for="dealer_20">千葉ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_21" value="市原展示場" /> <label for="dealer_21">市原展示場</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_22" value="川崎営業所" /> <label for="dealer_22">川崎営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_23" value="横浜営業所" /> <label for="dealer_23">横浜営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_24" value="湘南ハウスヤード" /> <label for="dealer_24">湘南ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_25" value="相模原営業所" /> <label for="dealer_25">相模原営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_26" value="相模原ハウスヤード" /> <label for="dealer_26">相模原ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_27" value="多摩営業所" /> <label for="dealer_27">多摩営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_28" value="川越ハウスヤード" /> <label for="dealer_28">川越ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_29" value="東松山展示場" /> <label for="dealer_29">東松山展示場</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="dealer_toukai" /><label for="dealer_toukai" class="atch_t strong_f big">東海</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="dealer[]" id="dealer_30" value="名古屋営業所" /> <label for="dealer_30">名古屋営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_31" value="岐阜ハウスヤード" /> <label for="dealer_31">岐阜ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_32" value="名古屋南営業所" /> <label for="dealer_32">名古屋南営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_33" value="飛島ハウスヤード" /> <label for="dealer_33">飛島ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_34" value="静岡営業所" /> <label for="dealer_34">静岡営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_35" value="静岡ハウスヤード" /> <label for="dealer_35">静岡ハウスヤード</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="dealer_kinki" /><label for="dealer_kinki" class="atch_t strong_f big">近畿</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="dealer[]" id="dealer_36" value="大阪営業所" /> <label for="dealer_36">大阪営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_37" value="大阪ハウスヤード" /> <label for="dealer_37">大阪ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_38" value="京滋営業所" /> <label for="dealer_38">京滋営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_39" value="摂津営業所" /> <label for="dealer_39">摂津営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_40" value="大和郡山ハウスヤード" /> <label for="dealer_40">大和郡山ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_41" value="伊丹営業所" /> <label for="dealer_41">伊丹営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_42" value="神戸営業所" /> <label for="dealer_42">神戸営業所</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="dealer_chugoku" /><label for="dealer_chugoku" class="atch_t strong_f big">中国/四国</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="dealer[]" id="dealer_43" value="広島営業所" /> <label for="dealer_43">広島営業所</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="dealer_kyusyu" /><label for="dealer_kyusyu" class="atch_t strong_f big">九州</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="dealer[]" id="dealer_44" value="北九州営業所" /> <label for="dealer_44">北九州営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_45" value="中間ハウスヤード" /> <label for="dealer_45">中間ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_46" value="福岡営業所" /> <label for="dealer_46">福岡営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_47" value="朝倉ハウスヤード" /> <label for="dealer_47">朝倉ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_48" value="福岡展示場" /> <label for="dealer_48">福岡展示場</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_49" value="柳川展示場" /> <label for="dealer_49">柳川展示場</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_50" value="久留米展示場" /> <label for="dealer_50">久留米展示場</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_51" value="熊本営業所" /> <label for="dealer_51">熊本営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_52" value="熊本ハウスヤード" /> <label for="dealer_52">熊本ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_53" value="八代展示場" /> <label for="dealer_53">八代展示場</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_54" value="大分営業所" /> <label for="dealer_54">大分営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_55" value="大分ハウスヤード" /> <label for="dealer_55">大分ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_56" value="中津展示場" /> <label for="dealer_56">中津展示場</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_57" value="鹿児島営業所" /> <label for="dealer_57">鹿児島営業所</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_58" value="霧島ハウスヤード" /> <label for="dealer_58">霧島ハウスヤード</label></li>
                    <li><input type='checkbox' name="dealer[]" id="dealer_59" value="鹿屋展示場" /> <label for="dealer_59">鹿屋展示場</label></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<button type="submit" class="btn btn_s atch strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="atch strong_f selection_title">住所で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="prefecture_all" /> <label for="prefecture_all" class="atch_t strong_f big mdl">すべて選択</label>
        <ul class="clearfix">
            <li class="choice_area"><input type='checkbox' id="prefecture_tohoku" /><label for="prefecture_tohoku" class="atch_t strong_f big">北海道/東北地方</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_1" value="青森県" /> <label for="prefecture_1">青森県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_2" value="岩手県" /> <label for="prefecture_2">岩手県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_3" value="宮城県" /> <label for="prefecture_3">宮城県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_4" value="秋田県" /> <label for="prefecture_4">秋田県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_5" value="山形県" /> <label for="prefecture_5">山形県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_6" value="福島県" /> <label for="prefecture_6">福島県</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="prefecture_kanto" /><label for="prefecture_kanto" class="atch_t strong_f big">関東地方</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_7" value="茨城県" /> <label for="prefecture_7">茨城県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_8" value="栃木県" /> <label for="prefecture_8">栃木県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_9" value="群馬県" /> <label for="prefecture_9">群馬県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_10" value="埼玉県" /> <label for="prefecture_10">埼玉県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_11" value="千葉県" /> <label for="prefecture_11">千葉県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_12" value="東京都" /> <label for="prefecture_12">東京都</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_13" value="神奈川県" /> <label for="prefecture_13">神奈川県</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="prefecture_chubu" /><label for="prefecture_chubu" class="atch_t strong_f big">中部地方</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_14" value="新潟県" /> <label for="prefecture_14">新潟県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_15" value="富山県" /> <label for="prefecture_15">富山県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_16" value="石川県" /> <label for="prefecture_16">石川県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_17" value="福井県" /> <label for="prefecture_17">福井県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_18" value="山梨県" /> <label for="prefecture_18">山梨県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_19" value="長野県" /> <label for="prefecture_19">長野県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_20" value="岐阜県" /> <label for="prefecture_20">岐阜県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_21" value="静岡県" /> <label for="prefecture_21">静岡県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_22" value="愛知県" /> <label for="prefecture_22">愛知県</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="prefecture_kinki" /><label for="prefecture_kinki" class="atch_t strong_f big">近畿地方</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_23" value="三重県" /> <label for="prefecture_23">三重県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_24" value="滋賀県" /> <label for="prefecture_24">滋賀県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_25" value="京都府" /> <label for="prefecture_25">京都府</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_26" value="大阪府" /> <label for="prefecture_26">大阪府</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_27" value="兵庫県" /> <label for="prefecture_27">兵庫県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_28" value="奈良県" /> <label for="prefecture_28">奈良県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_29" value="和歌山県" /> <label for="prefecture_29">和歌山県</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="prefecture_chugoku" /><label for="prefecture_chugoku" class="atch_t strong_f big">中国地方</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_30" value="鳥取県" /> <label for="prefecture_30">鳥取県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_31" value="島根県" /> <label for="prefecture_31">島根県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_32" value="岡山県" /> <label for="prefecture_32">岡山県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_33" value="広島県" /> <label for="prefecture_33">広島県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_34" value="山口県" /> <label for="prefecture_34">山口県</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="prefecture_shikoku" /><label for="prefecture_shikoku" class="atch_t strong_f big">四国地方</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_35" value="徳島県" /> <label for="prefecture_35">徳島県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_36" value="香川県" /> <label for="prefecture_36">香川県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_37" value="愛媛県" /> <label for="prefecture_37">高知県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_38" value="高知県" /> <label for="prefecture_38">鳥取県</label></li>
                </ul>
            </li>
            <li class="choice_area"><input type='checkbox' id="prefecture_kyusyu" /><label for="prefecture_kyusyu" class="atch_t strong_f big">九州地方</label>
                <ul class="choices clearfix">
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_39" value="福岡県" /> <label for="prefecture_39">福岡県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_40" value="佐賀県" /> <label for="prefecture_40">佐賀県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_41" value="長崎県" /> <label for="prefecture_41">長崎県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_42" value="熊本県" /> <label for="prefecture_42">熊本県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_43" value="大分県" /> <label for="prefecture_43">大分県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_44" value="宮崎県" /> <label for="prefecture_44">宮崎県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_45" value="鹿児島県" /> <label for="prefecture_45">鹿児島県</label></li>
                    <li><input type='checkbox' name="prefecture[]" id="prefecture_46" value="沖縄県" /> <label for="prefecture_46">沖縄県</label></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<button type="submit" class="btn btn_s atch strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<span class="atch strong_f selection_title">状態で探す</span>
<div class="check-selections clearfix">
<ul>
    <li>
        <input type='checkbox' id="condition_all" /> <label for="condition_all" class="atch_t strong_f big mdl">すべて選択</label>
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
<button type="submit" class="btn btn_s atch strong_f float_r"><i class="fas fa-search"></i> この条件で探す</button>
</div>
</div>

<div class="search-check-selection clearfix">
<div class="check-selections clearfix">
<div class="search-button"><div class="search-hits strong_f">該当件数 <span class="num">0005</span> 件</div><button type="submit" id="search-all" class="btn atch disp_f"><i class="fas fa-search"></i> アタッチメントを探す</button></div>
</div>
</div>

</form>
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
