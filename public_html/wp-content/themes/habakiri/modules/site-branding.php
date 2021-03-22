<?php
/**
 * Version    : 1.0.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : September 24, 2015
 * Modified   :
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php add_action(
	'wp_enqueue_scripts',
	wp_enqueue_style(
		'header-style',
		get_template_directory_uri() . '/css/header.css'
	));
?>

<?php do_action( 'habakiri_before_site_branding' ); ?>
<div class="site-branding">
	<h1 class="site-branding__heading">
		<a href="https://www.kencellara.com/">
	    <img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/ken_chan_bike/20210218/20210218212338.jpg" alt="ケンチェラーラのブログ" width="100%">
	  </a>
		<?php #get_template_part( 'modules/logo' ); ?>
	</h1>
<!-- end .site-branding --></div>
<?php do_action( 'habakiri_after_site_branding' ); ?>
