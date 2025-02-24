<?php

$submitUrl = "http://" . $_GET['sip'] . ":9997/login";

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

	<form method="POST" action="<?php echo htmlspecialchars($submitUrl); ?>">
	<label>User Name: <input type="text" name="username"></label><br/>
	<label>Password: <input type="text" name="password"></label><br/>
	<input type="submit">
	</form>
</body>
</html>
