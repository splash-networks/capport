<?php

$switch_url = $_GET['switch_url'];
$ap_mac = $_GET['ap_mac'];
$client_mac = $_GET['client_mac'];
$wlan = $_GET['wlan'];
$redirect = $_GET['redirect'];
$statusCode = $_GET['statusCode'];

if ($statusCode == 1) {
    $statusMessage = "You are already logged in.";
}
elseif ($statusCode == 2) {
    $statusMessage = "You are not configured to authenticate against this web portal.";
}
elseif ($statusCode == 3) {
    $statusMessage = "The email address specified cannot be used at this time. Perhaps the username is already logged into the system?";
}
elseif ($statusCode == 4) {
    $statusMessage = "This account has been excluded. Please contact the administrator.";
}
elseif ($statusCode == 5) {
    $statusMessage = "Invalid email or password. Please try again.";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Pragma" content="no-cache">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Web Authentication</title>
    </head>
 
<body>
  <h1>WiFi Login</h1>
        
  <form action="<?php echo $switch_url; ?>" method="post">
    <?php if ($statusMessage) echo "<p>{$statusMessage}</p>"; ?>
    Username
    <input type="text" name="username" required/>
    Password
    <input type="password" name="password" required/>
    <input type="submit" value="Log in" />
    <input type="hidden" name="buttonClicked" size="16" maxlength="15" value="4">
  </form>

</body>
</html> 
