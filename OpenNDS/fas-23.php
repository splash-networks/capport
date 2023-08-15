<?php

$fullname=$email=$gatewayname=$clientip=$gatewayaddress=$hid=$gatewaymac=$clientif=$redir=$client_zone="";

$key="128bcddbf4df3e16147dbb31b3b1b16472a3d2608f10b5407c8cdc352433761f";
$cipher="AES-256-CBC";
$iv=$_GET['iv'];
$string=$_GET['fas'];

$ndsparamlist=explode(" ", "clientip clientmac client_type gatewayname gatewayurl version hid gatewayaddress gatewaymac authdir originurl clientif admin_email location");

$decrypted=openssl_decrypt( base64_decode( $string ), $cipher, $key, 0, $iv );
$dec_r=explode(", ",$decrypted);

foreach ($ndsparamlist as $ndsparm) {
  foreach ($dec_r as $dec) {
    @list($name,$value)=explode("=",$dec);
    if ($name == $ndsparm) {
      $$name = $value;
      break;
    }
  }
}

if (isset($gatewayurl)) {
  $gatewayurl=rawurldecode($gatewayurl);
}

$me=$_SERVER['SCRIPT_NAME'];
$host=$_SERVER['HTTP_HOST'];
$fas=$GLOBALS["fas"];
$iv=$GLOBALS["iv"];
$clientip=$GLOBALS["clientip"];
$gatewayname=$GLOBALS["gatewayname"];
$gatewayaddress=$GLOBALS["gatewayaddress"];
$gatewaymac=$GLOBALS["gatewaymac"];
$key=$GLOBALS["key"];
$hid=$GLOBALS["hid"];
$clientif=$GLOBALS["clientif"];
$originurl=$GLOBALS["originurl"];

$authaction="http://$gatewayaddress/opennds_auth/";
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
