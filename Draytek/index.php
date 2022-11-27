<?php

if (isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];

header("Location: http://portal.draytek.com:8001/cgi-bin/wifilogin.cgi?username=".$username."&password=".$password);

}
?>


<html>
<body>

<form name="login" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
<label for="username">Username</label>
<input class="input" type="text" id="username" name="username" />
<label for="password">Password</label>
<input class="input" type="text" id="password" name="password" />
<input type="submit" name="submit" value="LOGIN" />
</form> 

</body>
</html>
