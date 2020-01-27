<?php

session_start();

$authaction = $_SESSION["authaction"];
$tok = $_SESSION["tok"];
$redir = $_SESSION["redir"];

?>

<html>
<head>
  <meta charset="utf-8">
  <title>Free WiFi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="bulma.min.css" />
  <script defer src="fontawesome-free-5.3.1-web\js\all.js"></script>
</head>
<body onload="document.hiddenform.submit()">

  <form method="get" name="hiddenform" action='<?php echo htmlspecialchars($authaction);?>'>
	<input type="hidden" name="tok" value='<?php echo htmlspecialchars($tok);?>'>
	<input type="hidden" name="redir" value='<?php echo htmlspecialchars($redir);?>'>
  </form>

</body>
</html>
