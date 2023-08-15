<?php

$authaction = $_GET['authaction'];
$tok = $_GET['tok'];
$redir = $_GET['redir'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
      Free WiFi
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>Connecting</p>
    <form id="form1" name="form1" method=GET action="<?php echo htmlspecialchars($authaction); ?>">
        <input name=tok value="<?php echo htmlspecialchars($tok); ?>" type="hidden">
        <input name=redir value="<?php echo htmlspecialchars($redir); ?>" type="hidden">
    </form>
<script type="text/javascript">
    window.onload = function () {
        window.setTimeout(function () {
            document.form1.submit();
        }, 2);
    };
</script>
</body>
</html>