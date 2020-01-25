<?php

session_start();

$mac = $_SESSION["id"];
$ap = $_SESSION["ap"];
$name = $_POST['name'];
$email = $_POST['email'];

require __DIR__ . '/vendor/autoload.php';

$duration = 30; //Duration of authorization in minutes
$site_id = 'site_id'; //Site ID found in URL (https://1.1.1.1:8443/manage/site/<site_ID>/devices/1/50)

$controlleruser     = 'username'; // the user name for access to the UniFi Controller
$controllerpassword = 'password'; // the password for access to the UniFi Controller
$controllerurl      = 'https://1.1.1.1:8443'; // full url to the UniFi Controller, eg. 'https://22.22.11.11:8443'
$controllerversion  = '5.10.21'; // the version of the Controller software, eg. '4.6.6' (must be at least 4.0.0)
$debug = false;

$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

$auth_result = $unifi_connection->authorize_guest($mac, $duration, $up = null, $down = null, $MBytes = null, $ap);

//User will be authorized at this point; their name and email address can be saved to some database now
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>WiFi Portal</title>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="refresh" content="5;url=https://www.google.com/" />
    </head>
    <body>
            <p>You're online! <br>
            Thanks for visiting us!</p>
    </body>
</html>
