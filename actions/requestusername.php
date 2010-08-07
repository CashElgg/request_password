<?php

function rp_send_username($user_guid) {
	global $CONFIG;

	$user_guid = (int)$user_guid;

	$user = get_entity($user_guid);
	$username = $user->username;
	if ($user) {
		// generate email
		$email = sprintf(elgg_echo('email:requsername:body'), $user->name, $user->username);

		return notify_user($user->guid, $CONFIG->site->guid, elgg_echo('email:requsername:subject'), $email, NULL, 'email');
	}

	return false;
}

$email = get_input('email');

$user = get_user_by_email($email);
if (is_array($user)) {
	$user = $user[0];
}

if ($user) {
	if (rp_send_username($user->guid)) {
		system_message(elgg_echo('user:requsername:success'));
	} else {
		register_error(elgg_echo('user:requsername:fail'));
	}
} else {
	register_error(sprintf(elgg_echo('user:email:notfound'), $email));
}

forward();
