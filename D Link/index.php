<?php

$login_url = $_GET['login_url'];

?>

<html>
<body>
    <form name="login" action = "<?php echo htmlspecialchars($login_url);?>" method = "POST">
		Username
		<input type="text" name="username" required/>
		Password
		<input type="password" name="password" required/>
		<input type="submit" name="submit" value="LOGIN" />
    </form>
</body>
</html>
