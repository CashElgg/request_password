<?php

  require_once(dirname(dirname(dirname(dirname(__FILE__)))) . "/engine/start.php");
  global $CONFIG;
  
  action_gatekeeper();
  
  $email = get_input('email');
  
  $user = get_user_by_email($email);
  if (is_array($user))
    $user = $user[0];
    
  if ($user)
  {
    if (send_new_password_request($user->guid))
      system_message(elgg_echo('user:password:resetreq:success'));
    else
      register_error(elgg_echo('user:password:resetreq:fail')); 
  }
  else
    register_error(sprintf(elgg_echo('user:email:notfound'), $email));
  
  forward($_SERVER['HTTP_REFERER']);
  exit;
?>
