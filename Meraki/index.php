<?php

session_start();

$_SESSION['url'] = $_GET['base_grant_url'] . '?continue_url=' . $_GET['user_continue_url'];

?>
<html>
<body>

<form method="post" action="connect.php">
    <input type="submit" name="submit" value="LOGIN"/>
</form>

</body>
</html>