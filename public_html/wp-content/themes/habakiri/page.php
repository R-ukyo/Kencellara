<?php
/**
 * Version    : 1.2.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php add_action(
	'wp_enqueue_scripts',
	wp_enqueue_style(
		'home-style',
		get_template_directory_uri() . '/css/home.css'
	));
?>
<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>
<div class="sub-page-contents">

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">

					<?php get_template_part( 'modules/breadcrumbs' ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; ?>

				<!-- end #main --></main>
			<!-- end .col-md-9 --></div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			<!-- end .col-md-3 --></div>
		<!-- end .row --></div>
	<!-- end .container --></div>

<!-- end .sub-page-contents --></div>
<?php get_footer(); ?>
