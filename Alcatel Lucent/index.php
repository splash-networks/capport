<?php

$switchip = $_GET['switchip'];
$clientmac = $_GET['clientmac'];
$url = $_GET['url'];

$auth_gateway = "http://cportal.al-enterprise.com/login";
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

		<form method="POST" action="<?php echo $auth_gateway; ?>">
			<input type="hidden" name="user" value="<?php echo htmlspecialchars($client_mac); ?>">
			<input type="hidden" name="password" value="<?php echo htmlspecialchars($client_mac); ?>">
			<input type="hidden" name="client_mac" value="<?php echo htmlspecialchars($client_mac); ?>">
			<input type="hidden" name="url" value="<?php echo htmlspecialchars($original_url); ?>">
			<button type="submit">Connect Now</button>
		</form>
    </body>
</html>
