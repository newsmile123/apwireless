<?php
session_start();
$iv = $_SESSION['demo']['tkip']["iv"];
$key = $_SESSION['demo']['tkip']['wep']["key"];
$plaintext = file_get_contents('text/plaintext.txt');
$td = mcrypt_encrypt(MCRYPT_ARCFOUR, $key, $plaintext, MCRYPT_MODE_STREAM, $iv);
$_SESSION['tkip']['ciphertext'] = $td;
file_put_contents('text/ciphertext.txt',$td);
header("Location: tkipenc.php");
?>