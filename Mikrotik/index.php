<?php
session_start();

$_SESSION["mac"]=$_POST['mac'];
$_SESSION["ip"]=$_POST['ip'];
$_SESSION["linklogin"]=$_POST['link-login'];
$_SESSION["linkorig"]=$_POST['link-orig'];
$_SESSION["error"]=$_POST['error'];
$_SESSION["chapid"]=$_POST['chap-id'];
$_SESSION["chapchallenge"]=$_POST['chap-challenge'];
$_SESSION["linkloginonly"]=$_POST['link-login-only'];
$_SESSION["linkorigesc"]=$_POST['link-orig-esc'];
$_SESSION["macesc"]=$_POST['mac-esc'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>WiFi Portal</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    </head>
    <body>
		<p>Welcome!<br>
		Please login to our Wifi service</p>

		<form method="post" action="connect.php">
			Name
			<input type="text" name="name" placeholder="Insert Name"><br>
			Email
			<input type="email" name="email" placeholder="Insert Email"><br>
			<input type="submit" value="Sign up">
		</form>
    </body>
</html>
