<?php

$token = $_GET["token"];
// Authorization Secret configured in Alta portal against this SSID
$secret = "testing123";
// API endpoint for user authorization
$api_url = "https://manage.alta.inc/api/wifi/auth"

$curl = curl_init();

$postData = [
  "token" => $token,
  "secret" => $secret
];

curl_setopt_array($curl, array(
  CURLOPT_URL => $api_url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($postData),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

if ($response !== false) {
  $json = json_decode($response, true);
  echo $json;
}
else {
  die("Error: check with your network administrator");
}

?>
