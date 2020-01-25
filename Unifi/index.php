<?php

session_start();

//Get the MAC addresses of AP and user

$_SESSION["id"] = $_GET["id"];
$_SESSION["ap"] = $_GET["ap"];

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>WiFi Portal</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
