<?php
$fb = new Facebook\Facebook([
  'app_id' => '888198724589587',
  'app_secret' => 'e2bc6abacce67e2924bb5272c0da3b72',
  'default_graph_version' => 'v2.4',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('hfb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>