<?php

$url = $_GET['login_url'];
$success_url = "https://splashnetworks.co";

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

  <form action="<?php echo $url; ?>" method="post">
    Username
    <input type="text" name="username" required/>
    Password
    <input type="password" name="password" required/>
    <input type="hidden" name=success_url value="<?php echo $success_url; ?>"/>
    <input type="submit" value="Log in" />
  </form>

</body>
</html> 
