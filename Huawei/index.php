<?php

$url = $_GET['url'];
$mac = $_GET['usermac'];

?>
<html>
<body>
    <form name="login" action = "<?php echo htmlspecialchars($url);?>" method = "POST">
        <input type="hidden" name="username" value="<?php echo htmlspecialchars($mac);?>" />
        <input type="hidden" name="password" value="<?php echo htmlspecialchars($mac);?>" />
        <input type="submit" name="submit" value="LOGIN" />
    </form>
</body>
</html>
