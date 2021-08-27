<?php
session_start();

$_SESSION["target"] = $_GET["target"];
$_SESSION["targetPort"] = $_GET["targetPort"];
$_SESSION["clientMac"] = $_GET["clientMac"];
$_SESSION["clientIp"] = $_GET["clientIp"];
$_SESSION["radiusServerIp"] = $_GET["radiusServerIp"];
$_SESSION["apMac"] = $_GET["apMac"];
$_SESSION["gatewayMac"] = $_GET["gatewayMac"];
$_SESSION["scheme"] = $_GET["scheme"];
$_SESSION["ssidName"] = $_GET["ssidName"];
$_SESSION["vid"] = $_GET["vid"];
$_SESSION["radioId"] = $_GET["radioId"];
$_SESSION["originUrl"] = $_GET["originUrl"];

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WiFi Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body>
		<p>Welcome!<br>
		Please login to our Wifi service</p>

		<form method="post" action="login.php">
			Username
			<input type="text" name="username" placeholder="Username"><br>
			Password
			<input type="password" name="password" placeholder="Password"><br>
			<input type="submit" value="Connect">
		</form>
    </body>
</html>
