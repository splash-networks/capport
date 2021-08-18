<?php

$posturl = $_GET['post'];

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

		<form method=POST action="https://<?php echo htmlspecialchars($post_url); ?>/cgi-bin/login">
			Username
			<input type="text" name="username" placeholder="Insert Username"><br>
			Password
			<input type="text" name="password" placeholder="Insert Password"><br>
			<input name=cmd value="authenticate" type="hidden">
			<input type="submit" value="Login">
		</form>
    </body>
</html>
