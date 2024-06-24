<?php

session_start();

$_SESSION["mac"] = $_GET["mac"];
$_SESSION["challenge"] = $_GET["challenge"];
$_SESSION["uamip"] = $_GET["uamip"];
$_SESSION["uamport"] = $_GET["uamport"];
$_SESSION["userurl"] = $_GET["userurl"];
$res = $_GET["res"];

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>WiFi Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>

<?php
if ($res === "notyet") {
  ?>
    <p>Welcome!<br>
        Please login to our Wifi service</p>

    <form method="POST" action="connect.php">
        <label>User Name: <input type="text" name="username"></label><br/>
        <label>Password: <input type="text" name="password"></label><br/>
        <input type="submit">
    </form>

  <?php
} else if ($res === "success") {
  header("Location: $redirect_url");
} else if ($res === "failed") {
  echo "<h2>Sorry, failed to authenticate</h2>";
} else if ($res === "logoff") {
  echo "<h2>Logging off...</h2>";
} else if ($res === "already") {
  header("Location: $redirect_url");
} else {
  echo "<h2>Error: Permission Denied</h2>";
}
?>

</body>
</html>
