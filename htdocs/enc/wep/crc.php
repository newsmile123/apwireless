<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
$plaintext = str_replace(" ", "", file_get_contents('text/plaintext.txt'));
$checksum = crc32($plaintext);
$checksum = dechex($checksum);
$_SESSION['wep']['checksum'] = $checksum;
file_put_contents('text/checksum.txt', $checksum);
echo $checksum;
//header("Location: process.php");
?>