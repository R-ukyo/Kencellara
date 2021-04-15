<?php
/**
 * Template Name: Blank Page
 *
 * Version      : 1.3.0
 * Author       : inc2734
 * Author URI   : http://2inc.org
 * Created      : April 17, 2015
 * Modified     : August 30, 2015
 * License      : GPLv2 or later
 * License URI  : license.txt
 */
?>
<?php
	$support_page_id = get_page_by_path('support')->ID;
	$kence_work_page_id = get_page_by_path('kence_work')->ID;
?>
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('home-style', get_template_directory_uri() . '/css/home.css', array('habakiri', 'common-style')));
	add_action('wp_enqueue_scripts', wp_enqueue_style('slick-style', get_template_directory_uri() . '/src/js/slick/slick.css'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/src/js/slick/slick-theme.css'));
?>
<?php get_template_part( 'modules/top-js' ); ?>
<?php get_header(); ?>

<div class="sub-page-contents">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<!-- <div class="collab_req">
					  <a href=<?php echo get_permalink( 709 ); ?>>コラボ・お仕事のご依頼</a>
					</div> -->

					<section class="typeA">
						<input id="TAB-A01" type="radio" name="TAB-A">
						<label class="tabLabel" for="TAB-A01">最新記事</label>
						<div class="content">
							<p>最新記事</p>
						</div>
						<input id="TAB-A02" type="radio" name="TAB-A" checked="checked">
						<label class="tabLabel" for="TAB-A02">メイン</label>
						<div class="content">
							<div class="storeCountArea">
							  <div class="storeCountContainer">
							    <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210209/20210209213841.jpg" alt="王冠" />
									現在<span class="storeCounter"><?php echo get_category(2)->count; ?></span>店舗制覇
									<img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210209/20210209213841.jpg" alt="王冠" />
							  </div>
							</div>

							<!-- スライドショー -->
							<div class="slider">
								<div>
							    <a href="https://www.kencellara.com/entry/kence-1000">
							      <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210217/20210217233602.jpg" alt="ケンチェ飯イベント" />
							    </a>
							  </div>
							  <div>
							    <a href="https://www.kencellara.com/entry/goshichiya">
							      <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210206/20210206203252.jpg" alt="麵屋 五七屋" />
							    </a>
							  </div>
							  <div>
							    <a href="https://www.kencellara.com/entry/ise-recommend-ramen">
							      <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210127/20210127004833.jpg" alt="伊勢のおすすめラーメン" />
							    </a>
							  </div>
							  <div>
							    <a href="https://www.kencellara.com/kence_work">
							      <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210215/20210215191350.jpg" alt="ケンチェ飯広告" />
							    </a>
							  </div>
							  <div>
							    <a href="https://www.kencellara.com/profile">
							      <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210107/20210107233006.jpg" alt="ケンチェのプロフィール" />
							    </a>
							  </div>
							  <div>
							    <a href="https://www.kencellara.com/entry/yashiro">
							      <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210205/20210205173339.jpg" alt="綱元の店 八代" />
							    </a>
							  </div>
							  <div>
							    <a href="https://www.kencellara.com/entry/menya-banbi">
							      <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210204/20210204212507.jpg" alt="麵屋 ばんび" />
							    </a>
							  </div>
							</div>
							<?php get_template_part( 'modules/slick-js' ); ?>

							<!-- 地域別検索 -->
							<div class="areaSearchZone">
							  <div class="areaSearchContainer">
							    <div class="areaSearchHeader topPageHeader">エリアでグルメ検索 <i class="fas fa-search"></i></div>
							    <div class="areaSearchInner">
							      <div class="hokubu areaZone">
							        <div class="hokubuHeader areaHeader">北部</div>
							        <ul class="areaList">
							          <li class="inabe">
							            <a href="">いなべ</a>
							          </li>
							          <li class="kuwana">
							            <a href=<?php $category_id = get_cat_ID('桑名市グルメ'); echo get_category_link($category_id); ?>>桑名</a>
							          </li>
							          <li class="yokkaichi">
							            <a href=<?php $category_id = get_cat_ID('四日市市グルメ'); echo get_category_link($category_id); ?>>四日市</a>
							          </li>
							          <li class="komono">
							            <a href="">菰野</a>
							          </li>
							          <li class="kameyama">
							            <a href=<?php $category_id = get_cat_ID('亀山市グルメ'); echo get_category_link($category_id); ?>>亀山</a>
							          </li>
							          <li class="suzuka">
							            <a href="">鈴鹿</a>
							          </li>
							        </ul>
							      </div>
							      <div class="iga areaZone">
							        <div class="igaHeader areaHeader">伊賀</div>
							        <ul class="areaList">
							          <li class="iga">
							            <a href=<?php $category_id = get_cat_ID('伊賀市グルメ'); echo get_category_link($category_id); ?>>伊賀</a>
							          </li>
							          <li class="nabari">
							            <a href="">名張</a>
							          </li>
							        </ul>
							      </div>
							      <div class="chubu areaZone">
							        <div class="chubuHeader areaHeader">中部</div>
							        <ul class="areaList">
							          <li class="tsu">
							            <a href=<?php $category_id = get_cat_ID('津市グルメ'); echo get_category_link($category_id); ?>>津</a>
							          </li>
							          <li class="matsusaka">
							            <a href=<?php $category_id = get_cat_ID('松阪市グルメ'); echo get_category_link($category_id); ?>>松阪</a>
							          </li>
							          <li class="meiwa">
							            <a href=<?php $category_id = get_cat_ID('明和町グルメ'); echo get_category_link($category_id); ?>>明和</a>
							          </li>
							          <li class="taki">
							            <a href=<?php $category_id = get_cat_ID('多気町グルメ'); echo get_category_link($category_id); ?>>多気</a>
							          </li>
							        </ul>
							      </div>
							      <div class="iseShima areaZone">
							        <div class="iseShimaHeader areaHeader">伊勢志摩</div>
							        <ul class="areaList">
							          <li class="ise">
							            <a href=<?php $category_id = get_cat_ID('伊勢市グルメ'); echo get_category_link($category_id); ?>>伊勢</a>
							          </li>
							          <li class="watarai">
							            <a href="">度会</a>
							          </li>
							          <li class="tamaki">
							            <a href="">玉城</a>
							          </li>
							          <li class="toba">
							            <a href=<?php $category_id = get_cat_ID('鳥羽市グルメ'); echo get_category_link($category_id); ?>>鳥羽</a>
							          </li>
							          <li class="shima">
							            <a href=<?php $category_id = get_cat_ID('志摩市グルメ'); echo get_category_link($category_id); ?>>志摩</a>
							          </li>
							          <li class="minamiise">
							            <a href=<?php $category_id = get_cat_ID('南伊勢町グルメ'); echo get_category_link($category_id); ?>>南伊勢</a>
							          </li>
							        </ul>
							      </div>
							      <div class="higashikishu areaZone">
							        <div class="higashikishuHeader areaHeader">東紀州</div>
							        <ul class="areaList">
							          <li class="odai">
							            <a href=<?php $category_id = get_cat_ID('大台町グルメ'); echo get_category_link($category_id); ?>>大台</a>
							          </li>
							          <li class="kihoku">
							            <a href=<?php $category_id = get_cat_ID('紀北町グルメ'); echo get_category_link($category_id); ?>>紀北</a>
							          </li>
							          <li class="taiki">
							            <a href="">大紀</a>
							          </li>
							          <li class="owase">
							            <a href=<?php $category_id = get_cat_ID('尾鷲市グルメ'); echo get_category_link($category_id); ?>>尾鷲</a>
							          </li>
							          <li class="kumano">
							            <a href="">熊野</a>
							          </li>
							          <li class="mihama">
							            <a href="">御浜</a>
							          </li>
							          <li class="kiho">
							            <a href="">紀宝</a>
							          </li>
							        </ul>
							      </div>
							    </div>
							  </div>
							</div>

							<!-- ジャンル別検索 -->
							<div class="genreSearchZone">
							  <div class="genreSearchContainer">
							    <div class="genreSearchHeader topPageHeader">ジャンルでグルメ検索 <i class="fas fa-search"></i></div>
							    <div class="genreSearchInner">
							      <div class="genreSearchColumn">
							        <div class="genreSearchCard">
							          <a href=<?php $category_id = get_cat_ID('お肉'); echo get_category_link($category_id); ?>>
							            お肉
							          </a>
							        </div>
							        <i class="fas fa-bookmark oniku"></i>
							        <div class="genreSearchCard">
							          <a href=<?php $category_id = get_cat_ID('定食'); echo get_category_link($category_id); ?>>
							            定食
							          </a>
							        </div>
							        <i class="fas fa-bookmark teishoku"></i>
							      </div>
							      <div class="genreSearchColumn">
							        <div class="genreSearchCard">
							          <a href=<?php $category_id = get_cat_ID('寿司'); echo get_category_link($category_id); ?>>
							            海鮮
							          </a>
							        </div>
							        <i class="fas fa-bookmark kaisen"></i>
							        <div class="genreSearchCard">
							          <a href=<?php $category_id = get_cat_ID('パン屋さん'); echo get_category_link($category_id); ?>>
							            パン
							          </a>
							        </div>
							        <i class="fas fa-bookmark bread"></i>
							      </div>
							      <div class="genreSearchColumn">
							        <div class="genreSearchCard">
							          <a href=<?php $category_id = get_cat_ID('カフェ'); echo get_category_link($category_id); ?>>
							            カフェ
							          </a>
							        </div>
							        <i class="fas fa-bookmark cafe"></i>
							        <div class="genreSearchCard">
							          <a href=<?php $category_id = get_cat_ID('チェーン店'); echo get_category_link($category_id); ?>>
							            チェーン
							          </a>
							        </div>
							        <i class="fas fa-bookmark chain"></i>
							      </div>
							      <div class="genreSearchColumn">
							        <div class="genreSearchCard">
							          <a href=<?php $category_id = get_cat_ID('ラーメン'); echo get_category_link($category_id); ?>>
							            ラーメン
							          </a>
							        </div>
							        <i class="fas fa-bookmark ramen"></i>
							        <div class="genreSearchCard">
							          <a href=<?php $category_id = get_cat_ID('居酒屋'); echo get_category_link($category_id); ?>>
							            居酒屋
							          </a>
							        </div>
							        <i class="fas fa-bookmark izakaya"></i>
							      </div>
							    </div>
							  </div>
							</div>

							<div class="recommendGourmetZone">
							  <div class="recommendGourmetHeader topPageHeader"><i class="fas fa-fire"></i> ケンチェ激推しグルメ <i class="fas fa-fire"></i></div>
							  <div class="recommendGourmetContainer first">
							    <div class="recommendGourmetBox">
							      <div class="recommendGourmetImg">
							        <a href="https://www.kencellara.com/entry/jamise">
							          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210207/20210207105029.jpg" alt="伊勢市のジャミセ" loading="lazy" />
							        </a>
							      </div>
							    </div>

							    <div class="recommendGourmetBox">
							      <div class="recommendGourmetImg">
							        <a href="https://www.kencellara.com/entry/nikumaru-obata">
							          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210124/20210124101015.jpg" alt="肉丸小俣店" loading="lazy" />
							        </a>
							      </div>
							    </div>

							    <div class="recommendGourmetBox">
							      <div class="recommendGourmetImg">
							        <a href="https://www.kencellara.com/entry/cultivate">
							          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210110/20210110001930.jpg" alt="カルティベイト" loading="lazy" />
							        </a>
							      </div>
							    </div>

							    <div class="recommendGourmetBox">
							      <div class="recommendGourmetImg">
							        <a href="https://www.kencellara.com/entry/killibilli">
							          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210208/20210208223419.jpg" alt="伊勢市のクレープ屋" loading="lazy" />
							        </a>
							      </div>
							    </div>
							  </div>
							  <div class="recommendGourmetContainer">
							    <div class="recommendGourmetBox">
							      <div class="recommendGourmetImg">
							        <a href="https://www.kencellara.com/entry/Kona-coffee">
							          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210210/20210210213614.jpg" alt="津市のコナズ珈琲" loading="lazy" />
							        </a>
							      </div>
							    </div>

							    <div class="recommendGourmetBox">
							      <div class="recommendGourmetImg">
							        <a href="https://www.kencellara.com/entry/nikkoutei">
							          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210118/20210118222638.jpg" alt="にっこう亭のお店情報まとめ" loading="lazy" />
							        </a>
							      </div>
							    </div>

							    <div class="recommendGourmetBox">
							      <div class="recommendGourmetImg">
							        <a href="https://www.kencellara.com/entry/cafe-shiroiro">
							          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20201208/20201208160153.jpg" alt="明和のカフェシロイロ" loading="lazy" />
							        </a>
							      </div>
							    </div>

							    <div class="recommendGourmetBox">
							      <div class="recommendGourmetImg">
							        <a href="https://www.kencellara.com/entry/meiwa-mugi">
							          <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210118/20210118222647.jpg" alt="明和町の麦のお店情報ランチ" loading="lazy" />
							        </a>
							      </div>
							    </div>
							  </div>
							</div>

							<!-- ケンチェ番付 -->
							<div class="headerBanzukeWrapper">
							  <div class="headerBanzuke">
							    <table>
							      <caption class="topPageHeader">ケンチェ番付 <i class="fas fa-trophy"></i></caption>
							      <tbody>
							        <tr>
							          <td class="lanking first">1位</td>
							          <td class="articleZone">
							            <h3><a class="articleLink" href="https://www.kencellara.com/entry/nakamura">お食事処 なかむら</a></h3>
							            <p>松阪市飯高町にある伝説の定食屋</p>
							          </td>
							          <td class="starZone first">
							            <div class="star-rating">
							              <div class="star-rating-item" style="width:96%;"></div>
							            </div>
							          </td>
							        </tr>
							        <tr>
							          <td class="lanking second">2位</td>
							          <td class="articleZone">
							            <h3><a class="articleLink" href="https://www.kencellara.com/entry/toramaru">虎丸</a></h3>
							            <p>ミシュランガイド掲載！伊勢で一番美味い海産物</p>
							          </td>
							          <td class="starZone second">
							            <div class="star-rating">
							              <div class="star-rating-item" style="width:90%;"></div>
							            </div>
							          </td>
							        </tr>
							        <tr>
							          <td class="lanking third">3位</td>
							          <td class="articleZone">
							            <h3><a class="articleLink" href="https://www.kencellara.com/entry/cafe-raku">Cafe&Store 楽</a></h3>
							            <p>雰囲気・料理など全てが完璧のカフェ</p>
							          </td>
							          <td class="starZone third">
							            <div class="star-rating">
							              <div class="star-rating-item" style="width:86%;"></div>
							            </div>
							          </td>
							        </tr>
							        <tr>
							          <td class="lanking fourth">4位</td>
							          <td class="articleZone">
							            <h3><a class="articleLink" href="https://www.kencellara.com/entry/itiensou">一円相</a></h3>
							            <p>三重県松阪市にあるコスパ最強の居酒屋</p>
							          </td>
							          <td class="starZone fourth">
							            <div class="star-rating">
							              <div class="star-rating-item" style="width:78%;"></div>
							            </div>
							          </td>
							        </tr>
							        <tr>
							          <td class="lanking fifth">5位</td>
							          <td class="articleZone">
							            <h3><a class="articleLink" href="https://www.kencellara.com/entry/misono">味園焼肉店</a></h3>
							            <p>松阪と言えばの極上霜降り焼肉を堪能</p>
							          </td>
							          <td class="starZone fifth">
							            <div class="star-rating">
							              <div class="star-rating-item" style="width:76%;"></div>
							            </div>
							          </td>
							        </tr>
							        <tr>
							          <td class="lanking sixth">6位</td>
							          <td class="articleZone">
							            <h3><a class="articleLink" href="https://www.kencellara.com/entry/owase-onigawara">鬼瓦</a></h3>
							            <p>三重県南部を代表する海鮮料理の王様</p>
							          </td>
							          <td class="starZone sixth">
							            <div class="star-rating">
							              <div class="star-rating-item" style="width:74%;"></div>
							            </div>
							          </td>
							        </tr>
							      </tbody>
							    </table>
							  </div>
							</div>

							<div class="kenceWindowAnnounce">
							  ご意見・ご要望は下記フォームからお気軽にどうぞ！<br/>
							  例：行って欲しいお店、コラボのご依頼、etc..<br/>
							  <i class="fas fa-chevron-down"></i>
							</div>

							<!-- modal open -->
							<div class="kenceWindowModalOpen">
							  <a class="js-modal-open" href="" data-target="modal01">ケンチェの窓口</a>
							</div>
							<!-- ./modal open -->

							<!-- modal -->
							<div id="modal01" class="kenceWindowModal js-modal">
							  <div class="kenceWindowModalBg js-modal-close"></div>
							  <div class="kenceWindowModalContent">
							    <div class="kenceWindowModalContentInner">
							      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf7z8zl1FGl9_pWK9EOQBTbHDTRJ3hd8yIlKoSIPhl4-LbGfg/viewform?embedded=true" width="639" height="830" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
							      <a class="js-modal-close kenceWindowModalClose" href=""><span>閉じる</span></a>
							    </div>
							  </div>
							</div>
							<!-- ./modal -->

							<div class="kenceWindowCaution">
							  ※Googleフォームが開きます<br/>
							  ※ページの遷移はございません
							</div>

							<!-- ブログ道リンク -->
							<!-- <div class="monthlyBlogInfo">
							  <a href="https://www.kencellara.com/entry/kencellara_blog">ブログPV数・収益の公開はこちら</a>
							</div> -->

							<div class="kencemeshiExplain">
								<div class="kencemeshiExplainHeader topPageHeader">
							    ケンチェ飯とは？
								</div>
						    <div class="kencemeshiExplainContents">
						      <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210215/20210215233759.jpg" alt="ケンチェラーラのプロフィール." loading="lazy" />
						      <p>三重県生まれ三重県育ちの「<strong>ケンチェラーラ.</strong>」が</p>
						      <p>三重県グルメを食べ歩き, <strong><u>どのサイトよりも詳しく</u></strong>グルメ情報を発信するサイト.</p>
						      <p>三重県の飲食店を探す際, <strong><u>カテゴリー別</u>, <u>エリア別</u></strong>に検索が可能.</p>
						      <p><strong><u>読者限定のイベント</u></strong>や<strong><u>特典</u></strong>が盛りだくさんなので、ぜひご活用ください.</p>
						      <p><span class="instaText">Instagram</span>で随時情報をお知らせ <a class="instaLink" href="https://www.instagram.com/kencellara_food/"><strong><u>@kencellara_food</u></strong></a></p>
						      <p class="p_f12em"><strong>ケンチェ飯の詳細は<a class="supportLink p_link" href=<?php echo get_permalink( $support_page_id ); ?>>こちら>></a></strong></p>
						    </div>
							</div>

							<div class="kencemeshiHistory">
								<div class="kencemeshiHistoryHeader topPageHeader">ケンチェ飯の実績</div>
								<div class="kencemeshiHistoryContents">
									<p><strong>2020年</strong></p>
									<ul>
										<li>8月　「ケンチェ飯」本格始動</li>
										<li>9月　GoogleAdsense広告連携開始</li>
										<li>11月　<span style="color: #ff0000;"><strong>月間アクセス数 12703 PV</strong></span></li>
										<li>12月　<strong><span style="color: #ff0000;">月間アクセス数  13948 PV</span></strong></li>
									</ul>
									<p><strong>2021年</strong></p>
									<ul>
										<li>1月　<strong><span style="color: #ff0000;">月間アクセス数 18757 PV</span></strong></li>
										<li>1月　<a href="https://miecolle.net/hito/1282">ミエコレ 飲食店ライターとして「ケンチェ飯」掲載</a></li>
										<li>1月　にっこう亭 取材依頼 受託</li>
										<li>1月　<a href="https://www.kencellara.com/entry/2021-1-event">江戸橋 富や コラボイベント 開催</a></li>
										<li>2月　<span style="color: #ff0000;"><strong>月間アクセス数 27704 PV</strong></span></li>
										<li>2月　三重タイムズ「ケンチェ飯」新聞掲載</li>
										<li>2月　<a href="https://otonamie.jp/?page_id=34706">OTONAMIE 地域のWEBメディアとして「ケンチェ飯」掲載</a></li>
										<li>2月　CAFE&amp;BAR TRIPLE A 取材依頼 受託</li>
										<li>3月　B&amp;Bフォレスト志摩 取材依頼 受託</li>
										<li>3月　株式会社えんこね 業務提携</li>
										<li>4月　ごきげんえびすHANARE 取材依頼 受託</li>
										<li>4月　麵屋AZITO 取材依頼 受託</li>
									</ul>
								</div>
							</div>

							<div class="supportZone">
								<script src="https://codoc.jp/js/cms.js" data-css="red-square" charset="UTF-8" defer></script>
								<div id="codoc-entry-Aly1W7g5Yg" class="codoc-entries" data-without-body="1" data-support-button-text="ケンチェラーラを支援する" data-show-like="0" data-show-powered-by="0" data-support-message="サイトの維持費・広告費・活動費に補填させて頂きます。"></div>
								<h3 class="supportNavTitle">お気持ありがとうございます。
								支援金は、当ブログの活動費として大切に使わせていただきます。
								今後も応援よろしくお願いします。</h3>
								<div class="supportNav">
									<h3 class="supportNavTitle">■ 支援金の使い道</h3>
									<p class="supportNavBody">
										・ブログ維持費
										・活動費
										・宣伝費
									</p>
									<h3 class="supportNavTitle">■ 支援額</h3>
									<p class="supportNavBody">・100円～10000円</p>
									<h3 class="supportNavTitle">■ サポート・スポンサー募集</h3>
									<h3 class="supportNavTitle">■ コラボ・お仕事の依頼</h3>
									<p class="supportNavBody">
										・<a class="supportLink" href=<?php echo get_permalink( $kence_work_page_id ); ?>>こちら</a>をクリック！
									</p>
								</div>
							</div>
						</div>
						<input id="TAB-A03" type="radio" name="TAB-A">
						<label class="tabLabel" for="TAB-A03">コラボ</label>
						<div class="content">
							<?php get_template_part( 'modules/kence_work' ); ?>
						</div>
					</section>
				</main>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
