<?php

$gw_address = $_GET['gw_address'];
$gw_port = $_GET['gw_port'];
$mac = $_GET['mac'];

$url = "http://" . $gw_address . ":" . $gw_port . "/wifidog/auth?token=" . $mac;

header("Location: $url");
