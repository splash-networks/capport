<?php

// IP and port of Omada Controller

$controllerIP = '192.168.8.175';
$controllerPort = '8043';

// Time duration in ms for which the client will be authorized on the network

$seconds = 3600000;

// Username/password of operator (created in Hotspot Manager => Operators)

$username = 'operator1';
$password = 'operator1';

#########################################################################

$clientMac = $_GET["clientMac"];
$apMac = $_GET["apMac"];
$ssidName = $_GET["ssidName"];
$t = $_GET["t"];
$radioId = $_GET["radioId"];
$site = $_GET["site"];
$cookiePath = "cookies/".$clientMac;

$curl = curl_init();

$postData = [
  "name" => $username,
  "password" => $password
];

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://'.$controllerIP.':'.$controllerPort.'/api/v2/hotspot/login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_COOKIEJAR => $cookiePath,
  CURLOPT_COOKIEFILE => $cookiePath,
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

curl_close($curl);

if ($response !== false) {
  $json = json_decode($response, true);
  $csrfToken = $json['result']['token'];
}
else {
  die("Error: check with your network administrator");
}

$postData2 = [
  "clientMac" => $clientMac,
  "apMac" => $apMac,
  'ssidName' => $ssidName,
  't' => $t,
  'radioId' => $radioId,
  'site' => $site,
  'authType' => 4,
  'time' => $seconds
];

$url = 'https://'.$controllerIP.':'.$controllerPort.'/api/v2/hotspot/extPortal/auth?token='.$csrfToken;

$curlAuth = curl_init();

curl_setopt_array($curlAuth, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_COOKIEJAR => $cookiePath,
  CURLOPT_COOKIEFILE => $cookiePath,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($postData2),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$res = curl_exec($curlAuth);

curl_close($curlAuth);

?>
