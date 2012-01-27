<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();

$logo = elgg_view('output/img', array(
	'src' => 'mod/momentum_theme/graphics/logo.png',
	'alt' => $site_name,
	'width' => 400,
	'height' => 100,
	'class' => 'logo',
));

echo elgg_view('output/url', array(
	'href' => $site_url,
	'text' => $logo,
	'is_trusted' => true,
));
