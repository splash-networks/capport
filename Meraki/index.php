<?php
session_start();

print_r($_GET);
$_SESSION['url'] = $_GET['base_grant_url'] . '?continue_url=https://www.google.com';

?>
<html>
<body>

<form method="post" action="connect.php">
    <input type="submit" name="submit" value="LOGIN"/>
</form>

</body>
</html>