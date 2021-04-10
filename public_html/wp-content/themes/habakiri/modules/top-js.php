<?php add_filter('wp_footer', function() { ?>
	<script>
		const fixedNode = jQuery('#jsFixedSNS');
		const scrollStart = fixedNode.offset().top;
		let distance = 0;

		jQuery(document).scroll(() => {
			distance = jQuery(this).scrollTop();

			if (scrollStart <= distance) {
				fixedNode.addClass('fixed');
			} else if (scrollStart >= distance) {
				fixedNode.removeClass('fixed');
			}
		});
	</script>
<?php } ); ?>
<?php
	add_action('wp_enqueue_scripts', wp_enqueue_script('slick-script', get_theme_file_uri('/src/js/slick/slick.min.js'), array('jquery')));
?>
