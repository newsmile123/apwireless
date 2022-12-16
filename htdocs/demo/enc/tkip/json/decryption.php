<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset($_POST['dec_iv']) && isset($_POST['dec_key'])){
	$iv = $_POST['dec_iv'];
	$key = $_POST['dec_key'];
}}
$plaintext = file_get_contents('text/ciphertext.txt');
$td = mcrypt_encrypt(MCRYPT_ARCFOUR, $key, $plaintext, MCRYPT_MODE_STREAM, $iv);
$_SESSION['tkip']['decrypt'] = $td;
file_put_contents('text/decrypt.txt',$td);
header("Location: tkipdec.php");
?>
