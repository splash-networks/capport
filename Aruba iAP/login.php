<?php
session_start();

$mac=$_POST['mac'];
$ip=$_POST['ip'];
$apmac=$_POST['apmac'];

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WiFi Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<p hidden>Guest_authenticated</p>
	<h1>Login Successful!</h1>
</body>
</html>
