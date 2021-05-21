<?php
/**
 * Version    : 1.3.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_style('archive-style', get_template_directory_uri() . '/css/archive.css'));
	add_action('wp_enqueue_scripts', wp_enqueue_style('sp_archive-style', get_template_directory_uri() . '/css/sp_archive.css'));
?>
<div class="container">
	<div class="row">
		<div class="col-md-9 archive">
			<main id="main" role="main">

				<?php #get_template_part( 'modules/breadcrumbs' ); ?>
				<?php
				$name = ( is_search() ) ? 'search' : 'archive';
				if ( have_posts() ) {
					get_template_part( 'content', $name );
				} else {
					get_template_part( 'content', 'none' );
				}
				?>

			</main>
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
