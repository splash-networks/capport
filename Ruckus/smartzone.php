<?php

session_start();

########### Set the following parameters according to your environment #########

// Northbound Portal Interface credentials

$username = 'admin';
$password = 'Admin@123';

// Redirect URL after successful user authorization

$redirectURL = "https://www.google.com";

################################################################################


if (!isset($_POST['submit'])) {
  $_SESSION['url'] = "http://" . $_GET['nbiIP'] . ":9080/portalintf";
  // In case of https: $_SESSION['url'] = "https://" . $_GET['nbiIP'] . ":9443/portalintf";
  $_SESSION['client_mac'] = $_GET['client_mac'];
  $_SESSION['uip'] = $_GET['uip'];
} else {
  $postData = [
    "Vendor" => "ruckus",
    "RequestUserName" => $username,
    "RequestPassword" => $password,
    "APIVersion" => "1.0",
    "RequestCategory" => "UserOnlineControl",
    "RequestType" => "Login",
    "UE-IP" => $_SESSION["uip"],
    "UE-MAC" => $_SESSION["client_mac"],
    "UE-Proxy" => "0",
    "UE-Username" => $_SESSION['client_mac'],
    "UE-Password" => $_SESSION['client_mac']
  ];

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $_SESSION['url'],
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
    $responseCode = $json['ResponseCode'];
    if ($responseCode == 201 || $responseCode == 101) {
      header("Location: " . $redirectURL);
    } else {
        echo "Error: check with your network administrator";
    }
  }
  else {
    die("Error: check with your network administrator");
  }
}

?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>WiFi Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>
<p>Welcome!<br>
  Please login to our Wifi service</p>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="submit" name="submit" value="LOGIN" />
</form>
</body>
</html>