<?php
session_start();

$mac=$_SESSION["mac"];
$ip=$_SESSION["ip"];
$linklogin=$_SESSION["linklogin"];
$linkorig=$_SESSION["linkorig"];
$error=$_SESSION["error"];
$chapid=$_SESSION["chapid"];
$chapchallenge=$_SESSION["chapchallenge"];
$linkloginonly=$_SESSION["linkloginonly"];
$linkorigesc=$_SESSION["linkorigesc"];
$macesc=$_SESSION["macesc"];

$username="admin";
      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
</head>

<body>

        <script type="text/javascript" src="./md5.js"></script>
        <script type="text/javascript">
                        function doLogin() {
                                        <?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
                                        document.sendin.username.value = document.login.username.value;
                                        document.sendin.password.value = hexMD5('\011\373\054\364\002\233\266\263\270\373\173\323\234\313\365\337\356');
                                        document.sendin.submit();
                                        return false;
                        }
        </script>
        <script type="text/javascript">
                function formAutoSubmit () {
                        var frm = document.getElementById("login");
                        document.getElementById("login").submit();
                        frm.submit();
        }
        window.onload = formAutoSubmit;
        </script>

        <form id="login" method="post" action="<?php echo $linkloginonly; ?>" onSubmit="return doLogin()">
        <input name="dst" type="hidden" value="<?php echo $linkorig; ?>" />
        <input name="popup" type="hidden" value="false" />
        <input name="username" type="hidden" value="<?php echo $username; ?>"/>
        <input name="password" type="hidden"/>
        </form>

</body>
</html>
