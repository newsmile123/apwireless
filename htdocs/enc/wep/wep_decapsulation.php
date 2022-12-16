<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset($_POST['key'])){
	$key = $_POST['key'];
}}
require_once('class.rc4crypt.php');

	$data = str_replace(" ", "", file_get_contents('text/ciphertext.txt'));
	$key = str_replace(" ", "", $key);
	$td = rc4crypt::decrypt($key, $data, 1);
	$encode_td = bin2hex($td);
	$td = str_split($td, 2);
	$_SESSION['wep']['decrypt'] = implode(" ", $td);
	file_put_contents('text/decrypt.txt',$td);
	echo implode(" ", $td);
?>
