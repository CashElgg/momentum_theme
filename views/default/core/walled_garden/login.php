<?php
/**
 * Walled garden login
 */

$title = elgg_get_site_entity()->name;
$img = elgg_view('output/img', array(
	'src' => 'mod/momentum_theme/graphics/logo_small.png',
	'title' => $title,
	'class' => 'momentum-walled-garden',
));
$text = elgg_get_site_entity()->description;

$login_box = elgg_view('core/account/login_box', array('module' => 'walledgarden-login'));

$content = <<<HTML
<div class="elgg-col elgg-col-1of2">
	<div class="elgg-inner">
		$img
		<div class="center"><h4>$text</h4></div>
	</div>
</div>
<div class="elgg-col elgg-col-1of2">
	<div class="elgg-inner">
		$login_box
	</div>
</div>
HTML;

echo elgg_view_module('walledgarden', '', $content, array(
	'class' => 'elgg-walledgarden-double',
	'header' => ' ',
	'footer' => ' ',
));
