<?php

$fullname=$email=$gatewayname=$clientip=$gatewayaddress=$hid=$gatewaymac=$clientif=$redir=$client_zone="";

$key="128bcddbf4df3e16147dbb31b3b1b16472a3d2608f10b5407c8cdc352433761f";
$fas=$_GET['fas'];
$decoded=base64_decode($fas);
$dec_r=explode(", ",$decoded);

foreach ($dec_r as $dec) {
@list($name,$value)=explode("=",$dec);
if ($name == "clientip") {$clientip=$value;}
if ($name == "clientmac") {$clientmac=$value;}
if ($name == "gatewayname") {$gatewayname=$value;}
if ($name == "gatewayurl") {$gatewayurl=rawurldecode($value);}
if ($name == "version") {$version=$value;}
if ($name == "hid") {$hid=$value;}
if ($name == "client_type") {$client_type=$value;}
if ($name == "gatewayaddress") {$gatewayaddress=$value;}
if ($name == "gatewaymac") {$gatewaymac=$value;}
if ($name == "authdir") {$authdir=$value;}
if ($name == "originurl") {$originurl=$value;}
if ($name == "clientif") {$clientif=$value;}
if ($name == "admin_email") {$admin_email=$value;}
if ($name == "location") {$location=$value;}
}

$authaction = "http://" . $gatewayaddress . "/opennds_auth/";
$tok=hash('sha256', $hid.$key);
$redir="https://www.google.com";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
      Free WiFi
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>Connecting</p>
    <form id="form1" name="form1" method=GET action="<?php echo htmlspecialchars($authaction); ?>">
        <input name=tok value="<?php echo htmlspecialchars($tok); ?>" type="hidden">
        <input name=redir value="<?php echo htmlspecialchars($redir); ?>" type="hidden">
    </form>
<script type="text/javascript">
    window.onload = function () {
        window.setTimeout(function () {
            document.form1.submit();
        }, 2);
    };
</script>
</body>
</html>