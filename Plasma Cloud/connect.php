<?php

session_start();

$uam_secret = "secret";
$redirect_url = "https://www.google.com";

function encode_password($plain, $challenge, $secret) {
  if ((strlen($challenge) % 2) != 0 ||
    strlen($challenge) == 0)
    return FALSE;
  $hexchall = hex2bin($challenge);
  if ($hexchall === FALSE)
    return FALSE;
  $key = md5($hexchall . $secret, TRUE);
  $key_len = 16;
  /* simulate C style \0 terminated string */
  $plain .= "\x00";
  $crypted = '';
  for ($i = 0; $i < strlen($plain); $i++)
    $crypted .= $plain[$i] ^ $key[$i % $key_len];
  return bin2hex($crypted);
}

$mac = $_SESSION["mac"];
$username = $mac;
$password = $mac;
$uamip = $_SESSION["uamip"];
$uamport = $_SESSION["uamport"];
$challenge = $_SESSION["challenge"];

$encoded_password = encode_password($password, $challenge, $uam_secret);

$uam_redirect_url = "http://$uamip:$uamport/logon?" .
  "username=" . urlencode($username) .
  "&password=" . urlencode($encoded_password) .
  "&redir=" . urlencode($redirect_url);

header('Location: ' . $uam_redirect_url);

?>
