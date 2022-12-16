<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset($_POST['key'])){
	$key = $_POST['key'];
	$_SESSION['wep']['key'] = $key;
}}

require_once('class.rc4crypt.php');

	$data = str_replace(" ", "", file_get_contents('text/plaintext.txt'));
	$key = str_replace(" ", "", $key);
	$td = rc4crypt::encrypt($key, $data, 1);
	$encode_td = bin2hex($td);
	//$dHex = rc4crypt::decrypt($pwd, $eHex, 1);
	
	$crc = $_SESSION['wep']['checksum'];
	
	$_SESSION['wep']['ciphertext'] = $td;
	file_put_contents('text/ciphertext.txt', $td);
	file_put_contents('text/encode_ciphertext.txt', $encode_td);
	$array = array("ciphertext" => $encode_td, "checksum" => $crc);
	echo json_encode($array);
?>