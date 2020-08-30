<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

  $fb = new Facebook\Facebook([
    'app_id' => '741859306610791',
    'app_secret' => 'eefc76a444ebd6b353f3d6f4bf4c3f2c',
    'default_graph_version' => 'v2.10',
   // 'default_access_token' => 'EAAKit5RxoGcBACmySgaV4jjk8JV7QgZCs1WVafZAZBurPaWlwSNvEMOei5Ldukt3ipGZC81ZCVCQZBx3ZAmuiofD7685VwFpKKBG22HcRIgM6vbhMGkR3t0vCAqNATZAAydSr1yefoIsDV5Gf6OohutZBjuR3DVfJVLeWtcCUUlbZAB1tubSMr8qsBKQKr3KlcZAjDLZC9g0jKvil86WEEO8HcY1N5muh8vOJv9ZAZAYAeTuZCRvgZDZD', // optional
  ]);

$helper = $fb->getRedirectLoginHelper();
// print_r($helper);exit;

$permissions = ['email']; // Optional permissions
//print_r($permissions);exit;
$loginUrl = $helper->getLoginUrl('https://training.localhost.com/callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
?>