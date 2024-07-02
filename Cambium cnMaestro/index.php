<?php

$server = $_GET['ga_srvr'];
$query_string = $_SERVER['QUERY_STRING'];

$url = "http://$server:880/cgi-bin/hotspot_login.cgi?$query_string";

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

<form method=POST action="<?php echo htmlspecialchars($url); ?>">
    <input name="ga_user" value="user1" type="hidden">
    <input name="ga_pass" value="pass1" type="hidden">
    <input type="submit" value="Connect">
</form>
</body>
</html>
