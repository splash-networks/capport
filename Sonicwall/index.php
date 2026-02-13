<?php
session_start();

if (isset($_POST['submit'])) {
	$curl = curl_init();
	
	$sessionLifetime = "3600";
	$idleTimeout = "300";
	$redirectUrl = "https://www.google.com";

	$postData = [
		'sessId' => $_SESSION['sessionId'],
		'userName' => $_SESSION['mac'],
		'$sessionLifetime' => $sessionLifetime,
		'idleTimeout' => $idleTimeout,
	];

	curl_setopt_array($curl, array(
		CURLOPT_URL => $_SESSION['url'],
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_COOKIEFILE => '',
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => http_build_query($postData),
	));

	$response = curl_exec($curl);
	curl_close($curl);

	$dom = new DOMDocument();
	@$dom->loadXML($response);

	$responseCode = $dom->getElementsByTagName('ResponseCode')->item(0);

	if ($responseCode && $responseCode->nodeValue == '50') {
		header('Location: ' . $redirectUrl);
	} else {
		echo "Response code is: " . ($responseCode ? $responseCode->nodeValue : 'unknown');
	}
} else {
	$_SESSION['sessionId'] = $_GET['sessionId'];
	$_SESSION['url'] = $_GET['mgmtBaseUrl'] . "externalGuestLogin.cgi";
	$_SESSION['mac'] = $_GET['mac'];
}
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

		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="submit" name="submit" value="LOGIN" />
		</form>
    </body>
</html>
