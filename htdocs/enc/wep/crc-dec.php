<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
$plaintext = file_get_contents('text/decrypt.txt');
$checksum = crc32($plaintext);
$checksum = dechex($checksum);
$_SESSION['wep']['checksum-dec'] = $checksum;
file_put_contents('text/checksum-dec.txt', $checksum);
echo $checksum;
//header("Location: process.php");
?>