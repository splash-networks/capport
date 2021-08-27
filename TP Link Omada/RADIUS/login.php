<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$authType = 2;
$target = "35.232.41.231";

$postData = [
  "clientMac" => $_SESSION["clientMac"],
  "clientIp" => $_SESSION["clientIp"],
  "apMac" => $_SESSION["apMac"],
  "gatewayMac" => $_SESSION["gatewayMac"],
  "ssidName" => $_SESSION["ssidName"],
  "vid" => $_SESSION["vid"],
  "radioId" => $_SESSION["radioId"],
  "originUrl" => $_SESSION["originUrl"],
  "authType" => $authType,
  "username" => $username,
  "password" => $password
];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $_SESSION["scheme"].'://'.$target.':'.$_SESSION["targetPort"].'/portal/radius/auth',
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

curl_close($curl);

if ($response !== false) {
  $json = json_decode($response, true);
  if ($json['errorCode'] == 0) {
    echo "Success!";
  }
}
else {
  die("Error: check with your network administrator");
}

?>
