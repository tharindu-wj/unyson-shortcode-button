<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
	'e25-shortcode-button',
	$shortcodes_extension->get_declared_URI('/shortcodes/e25-button/static/css/styles.css')
);

