<?php
/**
 * Request password reset or username using email
 *
 * @author Cash Costello
 * @license GPL2
 */

register_elgg_event_handler('init','system','request_password_init');

function request_password_init() {
	global $CONFIG;

	// overrides the default password request action
	register_action('user/requestnewpassword', true, $CONFIG->pluginspath . 'request_password/actions/requestnewpassword.php');

	// regsiter new action for username request
	register_action('user/requestusername', true, $CONFIG->pluginspath . 'request_password/actions/requestusername.php');
}
