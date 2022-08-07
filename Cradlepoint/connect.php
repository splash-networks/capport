<?php

$uam_secret = "secret";

function encode_password($plain, $challenge, $secret) {
        if ((strlen($challenge) % 2) != 0 ||
            strlen($challenge) == 0)
            return FALSE;

        $hexchall = hex2bin($challenge);
        if ($hexchall === FALSE)
                return FALSE;

        if (strlen($secret) > 0) {
                $crypt_secret = md5($hexchall . $secret, TRUE);
                $len_secret = 16;
        } else {
                $crypt_secret = $hexchall;
                $len_secret = strlen($hexchall);
        }

        /* simulate C style \0 terminated string */
        $plain .= "\x00";
        $crypted = '';
        for ($i = 0; $i < strlen($plain); $i++)
                $crypted .= $plain[$i] ^ $crypt_secret[$i % $len_secret];

        $extra_bytes = 0;//rand(0, 16);
        for ($i = 0; $i < $extra_bytes; $i++)
                $crypted .= chr(rand(0, 255));

        return bin2hex($crypted);
}

$username = $_POST["username"];
$password = $_POST["password"];
$uamip = $_POST["uamip"];
$uamport = $_POST["uamport"];
$challenge = $_POST["challenge"];

$encoded_password = encode_password($password, $challenge, $uam_secret);

$redirect_url = "http://$uamip:$uamport/logon?" .
"username=" . urlencode($username) .
"&response=" . urlencode($encoded_password);

header('Location: ' . $redirect_url);

?>
