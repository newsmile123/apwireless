<?php
session_start();
if (isset($_POST['iv']) && ($_POST['key'])){
$iv = $_POST['iv'];
$key = $_POST['key'];
}
$plaintext = file_get_contents('text/plaintext.txt');
$plaintext = str_replace(" ","", $plaintext);
$checksum = crc32($plaintext);
$plaintext .= $checksum;
$td = mcrypt_encrypt(MCRYPT_ARCFOUR, $key, $plaintext, MCRYPT_MODE_STREAM);
$_SESSION['wep']['ciphertext'] = $td;
//file_put_contents('text/ciphertext.txt',$td);
echo $plaintext;
?>