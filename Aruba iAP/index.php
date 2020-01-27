<?php

$mac=$_GET["mac"];
$ip=$_GET["ip"];
$apmac=$_GET["apmac"];

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
			Name
			<input type="text" name="name" placeholder="Insert Name"><br>
			Email
			<input type="email" name="email" placeholder="Insert Email"><br>
			<input type="hidden" name="mac" value="<?php echo $mac;?>">
			<input type="hidden" name="ip" value="<?php echo $ip;?>">
			<input type="hidden" name="apmac" value="<?php echo $apmac;?>">
			<input type="submit" value="Sign up">
		</form>
    </body>
</html>
