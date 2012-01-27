<?php
/**
 * Momentum theme and customizations
 */

elgg_register_event_handler('init', 'system', 'momentum_theme');

function momentum_theme() {
	elgg_unextend_view('page/elements/header', 'search/header');
	elgg_extend_view('navigation/menu/page', 'momentum/sidebar_menu', 1);

	elgg_unregister_menu_item('topbar', 'elgg_logo');
}
