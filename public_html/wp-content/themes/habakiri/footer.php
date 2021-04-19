<?php
/**
 * Version    : 1.0.1
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 24, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('footer-style', get_template_directory_uri() . '/css/footer.css', array('common-style')));
	add_action('wp_enqueue_scripts', wp_enqueue_script('to_pagetop-script', get_template_directory_uri() . '/js/to_pagetop.js'));
?>
		<?php do_action( 'habakiri_after_contents_content' ); ?>
	<!-- end #contents --></div>
	<footer id="footer" class="footer">
		<div id="footer-menu">
		  <div id="blog-title-content">
	      <a href="https://www.kencellara.com/">
	        <img class="hatena-fotolife" title="ケンチェラーラ." src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210109/20210109122234.jpg" data-src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210109/20210109122234.jpg" alt="ケンチェラーラフッター." style="height: 50px;" loading="lazy" />
	      </a>
	    </div>
	    <nav>
	      <div class="footer-links">
	        <ul>
	          <li>
	            <a href="https://www.kencellara.com/kence_work">お仕事のご依頼</a>
	          </li>
	          <li>
	            <a href="https://www.kencellara.com/kence_work">お問い合わせ</a>
	          </li>
	          <li>
	            <a href="https://www.kencellara.com/privacy-policy">プライバシーポリシー</a>
	          </li>
	        </ul>
	      </div>
	    </nav>
	    <p class="copyright">© 2020 kencellara.com All rights reserved.</p>
		</div>
	</footer>
	<ul class="toTop-nav">
    <li><a href="javascript:void(0);" onclick="smoothScroll(0);return false;"><i class="fas fa-chevron-up"></i></a></li>
  </ul>
<!-- end #container --></div>
<?php wp_footer(); ?>
</body>
</html>
