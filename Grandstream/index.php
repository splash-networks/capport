<?php

$login_url = $_GET['login_url'];
$ap_mac = $_GET['ap_mac'];
$client_mac = $_GET['client_mac'];
$orig_url = $_GET['orig_url'];
$redirect_url = "https://www.google.com";

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WiFi Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form method="GET" action="<?= htmlspecialchars($login_url) ?>">
		<input type="hidden" name="username" value="<?= htmlspecialchars($client_mac) ?>">
		<input type="hidden" name="password" value="<?= htmlspecialchars($client_mac) ?>">
		<input type="hidden" name="redirect" value="<?= htmlspecialchars($redirect_url) ?>">
		<button type="submit">Connect</button>
	</form>
</body>
</html>
