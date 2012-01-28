<?php
/**
 * Momentum theme and customizations
 */

elgg_register_event_handler('init', 'system', 'momentum_init');

function momentum_init() {
	elgg_unextend_view('page/elements/header', 'search/header');
	elgg_extend_view('navigation/menu/page', 'momentum/sidebar_menu', 1);

	elgg_unregister_menu_item('topbar', 'elgg_logo');

	elgg_register_plugin_hook_handler('register', 'openid_client:login', 'momentum_login');
}

function momentum_login($hook, $type, $info) {
	unset($info['small']);
	return $info;
}
