<?php

  $form_body = "<p>" . elgg_echo('user:password:text') . "</p>";
  $form_body .= "<p><b>". elgg_echo('email') . "</b> " . elgg_view('input/text', array('internalname' => 'email')) . "</p>";
  $form_body .= "<p>" . elgg_view('input/submit', array('value' => elgg_echo('request'))) . "</p>";
?>
<div class="contentWrapper">
  <?php echo elgg_view('input/form', array('action' => "{$vars['url']}action/user/requestnewpassword", 'body' => $form_body)); ?>
</div>
