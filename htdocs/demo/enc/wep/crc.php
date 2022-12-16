<?php
session_start();
$plaintext = file_get_contents('text/plaintext.txt');
$checksum = crc32($plaintext);
$checksum = dechex($checksum);
$_SESSION['demo']['wep']['checksum'] = $checksum;
echo $checksum;
file_put_contents('text/checksum.txt', $checksum);
//header("Location: process.php");
?>