<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new Facebook\Facebook([
  'app_id' => '741859306610791',
  'app_secret' => 'eefc76a444ebd6b353f3d6f4bf4c3f2c',
  'default_graph_version' => 'v2.10',
  'default_access_token' => 'EAAKit5RxoGcBACmySgaV4jjk8JV7QgZCs1WVafZAZBurPaWlwSNvEMOei5Ldukt3ipGZC81ZCVCQZBx3ZAmuiofD7685VwFpKKBG22HcRIgM6vbhMGkR3t0vCAqNATZAAydSr1yefoIsDV5Gf6OohutZBjuR3DVfJVLeWtcCUUlbZAB1tubSMr8qsBKQKr3KlcZAjDLZC9g0jKvil86WEEO8HcY1N5muh8vOJv9ZAZAYAeTuZCRvgZDZD', // optional
]);


// $fb->setDefaultAccessToken('EAAKit5RxoGcBACmySgaV4jjk8JV7QgZCs1WVafZAZBurPaWlwSNvEMOei5Ldukt3ipGZC81ZCVCQZBx3ZAmuiofD7685VwFpKKBG22HcRIgM6vbhMGkR3t0vCAqNATZAAydSr1yefoIsDV5Gf6OohutZBjuR3DVfJVLeWtcCUUlbZAB1tubSMr8qsBKQKr3KlcZAjDLZC9g0jKvil86WEEO8HcY1N5muh8vOJv9ZAZAYAeTuZCRvgZDZD');

// try {
//   $response = $fb->get('/me');
//   $userNode = $response->getGraphUser();
// } catch(Facebook\Exceptions\FacebookResponseException $e) {
//   // When Graph returns an error
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(Facebook\Exceptions\FacebookSDKException $e) {
//   // When validation fails or other local issues
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }

// echo 'Logged in as ' . $userNode->getName();

// try {
//     // Returns a `FacebookFacebookResponse` object
//     $response = $fb->get(
//       '/me',
//       'EAAKit5RxoGcBACmySgaV4jjk8JV7QgZCs1WVafZAZBurPaWlwSNvEMOei5Ldukt3ipGZC81ZCVCQZBx3ZAmuiofD7685VwFpKKBG22HcRIgM6vbhMGkR3t0vCAqNATZAAydSr1yefoIsDV5Gf6OohutZBjuR3DVfJVLeWtcCUUlbZAB1tubSMr8qsBKQKr3KlcZAjDLZC9g0jKvil86WEEO8HcY1N5muh8vOJv9ZAZAYAeTuZCRvgZDZD'
//     );
//   } catch(FacebookExceptionsFacebookResponseException $e) {
//     echo 'Graph returned an error: ' . $e->getMessage();
//     exit;
//   } catch(FacebookExceptionsFacebookSDKException $e) {
//     echo 'Facebook SDK returned an error: ' . $e->getMessage();
//     exit;
//   }
//   $graphNode = $response->getGraphNode();

// $me = $response->getGraphUser();
// echo 'Logged in as ' . $me->getName();
// echo $me->getBirthday();
// echo $me->getGender();
?>