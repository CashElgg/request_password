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
    if ($user->validated) 
    {
      if (send_new_password_request($user->guid))
        system_message(elgg_echo('user:password:resetreq:success'));
      else
        register_error(elgg_echo('user:password:resetreq:fail'));
    }
    else
    {
      if (!trigger_plugin_hook('unvalidated_requestnewpassword', 'user', array('entity'=>$user))) 
      {
        // if plugins have not registered an action, the default action is to
        // trigger the validation event again and assume that the validation
        // event will display an appropriate message
        trigger_elgg_event('validate', 'user', $user);
      }    
    } 
  }
  else
    register_error(sprintf(elgg_echo('user:email:notfound'), $email));
  
  forward();
  exit;
?>
