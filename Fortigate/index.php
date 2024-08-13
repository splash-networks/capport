<?php

$post = $_GET['post'];
$magic = $_GET['magic'];

?>
<html>
<body>
    <form name="login" method = "POST" action = "<?php echo htmlspecialchars($post);?>">
        <label for="username">Username</label>
        <input class="input" type="text" id="username" name="username" />
        <label for="password">Password</label>
        <input class="input" type="text" id="password" name="password" />
        <input type="hidden" name=magic value="<?php echo htmlspecialchars($magic);?>">
        <input type="submit" name="submit" value="LOGIN" />
    </form>
</body>
</html>
