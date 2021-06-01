<?php
/**
 * Version    : 1.4.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 28, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<article <?php post_class( array( 'article', 'article--single' ) ); ?>>
	<div class="entry">
		<?php Habakiri::the_title(); ?>
		<?php get_template_part( 'modules/above_article' ); ?>
		<?php #get_template_part( 'modules/entry-meta' ); ?>
		<?php do_action( 'habakiri_before_entry_content' ); ?>
		<div class="entry__content">
			<?php the_content(); ?>
		</div>
		<?php do_action( 'habakiri_after_entry_content' ); ?>
	</div>
	<?php get_template_part( 'modules/below_article' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
	<?php get_template_part( 'modules/related-posts' ); ?>
	<?php /*
	if ( comments_open() || pings_open() || get_comments_number() ) {
		comments_template( '', true );
	}
	*/ ?>
	<div class="kenceWorkWindowZone">
		<div class="kenceWorkWindowHeader belowArticleHeader">お問い合わせフォーム</div>
		<div class="kenceWorkWindowExplain">
			<ul>
				<li>お店の取材依頼</li>
				<li>コラボ依頼</li>
				<li>スポンサー・広告依頼</li>
				<li>読者がケンチェ飯に行って欲しいお店</li>
				<li>ケンチェ飯とご飯を一緒に食べてみたい</li>
			</ul>
			<p>内容問わず、お気軽に下記フォームよりご連絡下さい！</p>
		</div>
		<div class="kenceWorkWindow">
		  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf7z8zl1FGl9_pWK9EOQBTbHDTRJ3hd8yIlKoSIPhl4-LbGfg/viewform?embedded=true" width="100%" height="850" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
		</div>
	</div>
	<div class="kencemeshiSupportZone">
		<div class="kencemeshiSupportHeader">日頃よりご支援頂き誠にありがとうございます。</div>
		<script src="https://codoc.jp/js/cms.js" data-css="red-square" charset="UTF-8" defer="defer"></script>
		<div id="codoc-entry-Aly1W7g5Yg" class="codoc-entries" data-without-body="1" data-support-button-text="ケンチェ飯を支援する" data-show-like="0" data-show-powered-by="0" data-support-message="頂戴しましたご支援は、サイトの運営費に補填させて頂いております。"></div>
	</div>
</article>
