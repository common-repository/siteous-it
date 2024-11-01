<?php
/*
Plugin Name: siteous it!
Plugin URI: http://muhammad.zamroni.net/siteous-it.html
Description: Make your URL short using <a href="http://siteo.us/">siteo.us</a>
Version: 1.0
Author: Muhammad Zamroni
Author URI: http://muhammad.zamroni.net/
*/

function mtp_siteous_css() {
echo '
<style>
.siteous { text-transform: lowercase; font-weight: bold; }
.siteous a { border: 1px solid #f36 !important; padding: 5px 10px; color: #fff; background: #f36; }
.siteous a:hover { color: #f36; background: #fff; }
</style>
';
}

function mtp_siteous_it($content) {
	global $post;
	$content .= '<p class="siteous"><a href="http://siteo.us/?url='.get_permalink($post->ID).'" target="_blank">Siteous and share</a></p>';
	return $content;
}

add_filter('the_content','mtp_siteous_it');
add_action('wp_head','mtp_siteous_css');

?>
