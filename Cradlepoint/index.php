<?php
session_start();
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>WiFi Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>

<?php
	$res = $_GET["res"];
	if ($res === "notyet")
	{
?>
	<p>Welcome!<br>
	Please login to our Wifi service</p>

	<form method="POST" action="connect.php">
  	<label>User Name: <input type="text" name="username"></label><br/>
  	<label>Password: <input type="text" name="password"></label><br/>
  	<input type="hidden" name="challenge" value="<?php echo $_GET["challenge"] ?>">
  	<input type="hidden" name="uamip" value="<?php echo $_GET["uamip"] ?>">
  	<input type="hidden" name="uamport" value="<?php echo $_GET["uamport"] ?>">
  	<input type="hidden" name="userurl" value="<?php echo $_GET["userurl"] ?>">
  	<input type="submit">
	</form>

<?php
	}
	else if ($res === "success") {
		$redir = $_SESSION["userurl"];
	  	if(isset($redir)) {
	  		echo "<head>";
    		echo '<meta http-equiv="refresh" content="3;URL=\'' . $redir . '\'">';
    		echo "</head>";
    	}
    	else {
    		echo "<h2>Log-in successful!</h2>";
    	}
	}
	else if ($res === "failed") {
		echo "<h2>Whoops, failed to authenticate</h2>";
	}
	else if ($res === "logoff") {
		echo "<h2>Logging off ...</h2>";
	}
	else {
		echo "<h2>Oops!, bad 'res' parameter</h2>";
	}
?>

</body>
</html>
