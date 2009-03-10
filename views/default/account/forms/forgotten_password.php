<?php

  $form_body = "<p>" . elgg_echo('user:password:text') . "</p>";
  $form_body .= "<p><b>". elgg_echo('email') . "</b> " . elgg_view('input/text', array('internalname' => 'email')) . "</p>";
  $form_body .= "<p>" . elgg_view('input/submit', array('value' => elgg_echo('request'))) . "</p>";
?>
<div class="contentWrapper">
  <?php echo elgg_view('input/form', array('action' => "{$vars['url']}action/user/requestnewpassword", 'body' => $form_body)); ?>
</div>
<br />
<?php
  $form_body = "<p>" . elgg_echo('user:requsername:text') . "</p>";
  $form_body .= "<p><b>". elgg_echo('email') . "</b> " . elgg_view('input/text', array('internalname' => 'email')) . "</p>";
  $form_body .= "<p>" . elgg_view('input/submit', array('value' => elgg_echo('request'))) . "</p>";
?>
<div id="content_area_group_title"><h2><?php echo elgg_echo('user:requsername'); ?></h2></div>
<div class="contentWrapper">
  <?php echo elgg_view('input/form', array('action' => "{$vars['url']}action/user/requestusername", 'body' => $form_body)); ?>
</div>
