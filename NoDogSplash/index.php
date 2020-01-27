<?php

session_start();

$key="12345";
date_default_timezone_set("UTC");
if (isset($_SERVER['HTTPS'])) {
	$protocol="https://";
} else {
	$protocol="http://";
}
$cipher="AES-256-CBC";
$docroot=$_SERVER['DOCUMENT_ROOT'];
$me=$_SERVER['SCRIPT_NAME'];
$home=str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$header="NDS Captive Portal";

if (isset($_GET['fas']) and isset($_GET['iv']))  {
	$string=$_GET['fas'];
	$iv=$_GET['iv'];
	$decrypted=openssl_decrypt( base64_decode( $string ), $cipher, $key, 0, $iv );
	$dec_r=explode(", ",$decrypted);
	foreach ($dec_r as $dec) {
		list($name,$value)=explode("=",$dec);
		if ($name == "clientip") {$clientip=$_SESSION["clientip"]=$value;}
		if ($name == "clientmac") {$clientmac=$_SESSION["clientmac"]=$value;}
		if ($name == "gatewayname") {$gatewayname=$_SESSION["gatewayname"]=$value;}
		if ($name == "tok") {$tok=$_SESSION["tok"]=$value;}
		if ($name == "gatewayaddress") {$gatewayaddress=$_SESSION["gatewayaddress"]=$value;}
		if ($name == "authdir") {$authdir=$_SESSION["authdir"]=$value;}
		if ($name == "originurl") {$originurl=$_SESSION["originurl"]=$value;}
	}
}
// Add headers to stop browsers from cacheing 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

$authaction=$_SESSION["authaction"]="http://".$gatewayaddress."/".$authdir."/";

?>
<html>
<head>
  <meta charset="utf-8">
  <title>WiFi Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
    <body>
		<p>Welcome!<br>
		Please login to our Wifi service</p>

		<form method="post" action="connecting.php">
			Name
			<input type="text" name="name" placeholder="Insert Name"><br>
			Email
			<input type="email" name="email" placeholder="Insert Email"><br>
			<input type="submit" value="Sign up">
		</form>
    </body>
</html>
