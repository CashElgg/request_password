<?php

  function request_password_init() 
  {
    global $CONFIG;
    
    // overrides the default password request action
    register_action('user/requestnewpassword', false, $CONFIG->pluginspath . 'request_password/actions/requestnewpassword.php');

    // regsiter new action for username request
    register_action('user/requestusername', false, $CONFIG->pluginspath . 'request_password/actions/requestusername.php');
  }


  register_elgg_event_handler('init','system','request_password_init');
?>
