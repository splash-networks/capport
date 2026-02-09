<?php

$sessionId = $_GET['sessionId'];
$mgmtBaseUrl = $_GET['mgmtBaseUrl'];
$url = $mgmtBaseUrl . "externalGuestLogin.cgi";
$sessionLifetime = 3600;
$idleTimeout = 300;
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

		<form method="POST" action="<?php echo $url;?>">
			<input type="hidden" name="sessId" value="<?php echo $sessionId;?>">
			<input type="hidden" name="userName" value="username">
			<input type="hidden" name="sessionLifetime" value="<?php echo $sessionLifetime; ?>">
			<input type="hidden" name="idleTimeout" value="<?php echo $idleTimeout; ?>">
			<input type="submit" name="login" value="Login">
		</form>
    </body>
</html>
