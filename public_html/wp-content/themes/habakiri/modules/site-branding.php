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
<?php $upload_dir = wp_upload_dir(); ?>

<?php do_action( 'habakiri_before_site_branding' ); ?>
<div class="site-branding">
	<h1 class="site-branding__heading">
		<a href=<?php echo home_url() ?>>
	    <img src="<?php echo $upload_dir['baseurl']; ?>/toppage/header_1.jpg" alt="ケンチェラーラのブログ" width="100%">
	  </a>
	</h1>
</div>
<?php do_action( 'habakiri_after_site_branding' ); ?>
