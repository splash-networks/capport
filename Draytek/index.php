<?php
session_start();

if(isset($_GET['loginurl'])) {
  $_SESSION['loginurl'] = $_GET['loginurl'];
}

if (isset($_POST['submit'])) {
    $loginurl = $_SESSION['loginurl'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    header("Location: " . $loginurl . "?username=" . $username . "&password=" . $password);
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
