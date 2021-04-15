<?php
/**
 * Version    : 1.0.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   :
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('sidebar-style', get_template_directory_uri() . '/css/sidebar.css', array('common-style')));
?>
<!-- 変数定義 -->
<?php
	$kw_page_id = get_page_by_path('kence_work')->ID;
	$cg_args = array(
		'parent' => 0,
		'orderby' => 'term_order',
		'order' => 'ASC'
	);
	$categories = get_categories( $cg_args );
?>
<aside id="sub">
	<div class="sidebar">
		<?php get_template_part( 'searchform' ); ?>
		<div class="sb_plofile sb_content">
			<div class="profileImg">
				<img class="hatena-fotolife" title="f:id:ken_chan_bike:20200902121305p:plain" src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210107/20210107235634.jpg" alt="f:id:ken_chan_bike:20200902121305p:plain" />
			</div>
			<div class="profileSentence">
				三重県で一番詳しいグルメディア.<br>
				三重県生まれ, 三重県育ちのケンチェラーラが, 県内飲食店を全店舗制覇します.<br>
				年間300食以上の食べ歩き.<br>
				どのサイトよりも詳しく三重県のグルメ情報を発信.<br>
				三重で本当に美味い食べ物を探すならココ！<br>
				取材依頼・食事のお誘いお待ちしております.<br>
				スポンサー・取材依頼は<a class="workLink" href=<?php echo get_permalink( $kw_page_id ); ?>>コチラ≻≻≻</a>
			</div>
			</div>
		</div>
		<div class="sb_adsense sb_content">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- サイドバー設置 スクエア -->
			<ins class="adsbygoogle" style="display: block;" data-ad-client="ca-pub-7898839193224300" data-ad-slot="7778306766" data-ad-format="auto" data-full-width-responsive="true"></ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<div class="sb_insta sb_content">
			<blockquote class="instagram-media" style="background: #FFF; border: 0; border-radius: 3px; box-shadow: 0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; padding: 0; width: calc(100% - 2px);" data-instgrm-captioned="" data-instgrm-permalink="https://www.instagram.com/p/CGU64UZnqjJ/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13">
				<div style="padding: 16px;">
					&nbsp;
					<div style="display: flex; flex-direction: row; align-items: center;">
						<div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
						<div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
							<div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
							<div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
						</div>
					</div>
					<div style="padding: 19% 0;"></div>
					<div style="display: block; height: 50px; margin: 0 auto 12px; width: 50px;"></div>
					<div style="padding-top: 8px;">
						<div style="color: #3897f0; font-family: Arial,sans-serif; font-size: 14px; font-style: normal; font-weight: 550; line-height: 18px;">この投稿をInstagramで見る</div>
					</div>
					<div style="padding: 12.5% 0;"></div>
					<div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
						<div>
							<div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
							<div style="background-color: #f4f4f4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
							<div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
						</div>
						<div style="margin-left: 8px;">
							<div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
							<div style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg);"></div>
						</div>
						<div style="margin-left: auto;">
							<div style="width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
							<div style="background-color: #f4f4f4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
							<div style="width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
						</div>
					</div>
					<div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
						<div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
						<div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
					</div>
					&nbsp;
					<p style="color: #c9c8cd; font-family: Arial,sans-serif; font-size: 14px; line-height: 17px; margin-bottom: 0; margin-top: 8px; overflow: hidden; padding: 8px 0 7px; text-align: center; text-overflow: ellipsis; white-space: nowrap;"><a style="color: #c9c8cd; font-family: Arial,sans-serif; font-size: 14px; font-style: normal; font-weight: normal; line-height: 17px; text-decoration: none;" href="https://www.instagram.com/p/CGU64UZnqjJ/?utm_source=ig_embed&amp;utm_campaign=loading" target="_blank" rel="noopener">ケンチェ飯@三重県グルメ制覇(@kencellara_food)がシェアした投稿</a></p>
				</div>
			</blockquote>
			<script async src="//www.instagram.com/embed.js"></script>
		</div>
		<div class="sb_adsense sb_content">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- rectangle広告 -->
			<ins class="adsbygoogle" style="display: block;" data-ad-client="ca-pub-7898839193224300" data-ad-slot="4070625880" data-ad-format="rectangle" data-full-width-responsive="true"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<div class="sb_categories sb_content">
			<ul>
				<?php foreach( $categories as $category ) : ?>
					<li>
						<a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="sb_archive sb_content">
			<ul class="archive_list">
			  <?php
		      $string = wp_get_archives(
						array(
							'show_post_count' => 1,
							'echo' => 0
		        ));
		      echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</span></a>', $string);
			  ?>
			</ul>
		</div>
		<div class="sb_twitter sb_content">
			<a class="twitter-timeline" href="https://twitter.com/kencellara_food?ref_src=twsrc%5Etfw">Tweets by kencellara_food</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>
		<div class="sb_adsense sb_content">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- rectangle広告 -->
			<ins class="adsbygoogle" style="display: block;" data-ad-client="ca-pub-7898839193224300" data-ad-slot="4070625880" data-ad-format="rectangle" data-full-width-responsive="true"></ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</aside>
