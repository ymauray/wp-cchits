<?php
/*
Plugin Name: wp-cchits
Plugin URI: http://www.euterpia-radio.fr/plugins/wp-cchits/
Description: A plugin that provides shortcodes for cchits.net
Version: 0.1.alpha
Author: Yannick
Author URI: http://www.euterpia-radio.fr/
Contributors:
Yannick

Credits:

Copyright 2013 - Euterpia Radio

License: GPL (http://www.gnu.org/licenses/gpl-3.0.txt)
*/

function cchits_shortcode($atts, $content = null) {
	extract(shortcode_atts(array(
                        'url' => '',
			'tag' => 'Votez pour ce titre sur cchits.net',
			'width' => 16,
			'height' => 16,
			'icon' => 'cchits-16.png'
        ), $atts));

	$image = plugins_url($icon, __FILE__);

	if ($url != '') {
		return '<a href="' . $url . '"><img title="' . $tag . '" src="' . $image . '" alt="' . $tag . '" width="' . $width . '" height="' . $height . '" /></a>';
	}
	else {
		return '';
	}
}

add_shortcode('cchits', 'cchits_shortcode');
?>
