<?php

  function request_password_init() 
  {
    global $CONFIG;
    
    // overrides the default password request action
    register_action('user/requestnewpassword', false, $CONFIG->pluginspath . 'request_password/actions/requestnewpassword.php');
  }


  register_elgg_event_handler('init','system','request_password_init');
?>
