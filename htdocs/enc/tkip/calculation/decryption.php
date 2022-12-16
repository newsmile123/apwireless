<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset($_POST['iv']) && isset($_POST['key'])){
	$iv = $_POST['iv'];
	$key = $_POST['key'];
}}
require_once('class.rc4crypt.php');

	$data = str_replace(" ", "", file_get_contents('/text/ciphertext.txt'));
	$key = str_replace(" ", "", $key);
	$td = rc4crypt::decrypt($key, $data, 1);
	$encode_td = bin2hex($td);
	
	$td = str_split($td, 2);
	file_put_contents('../text/decrypt.txt',$td);
	$array = array("plaintext" => implode(" ", $td));
	echo json_encode($array);
	
	$_SESSION['tkip']['dec']['rc4']["iv"] = $iv;
	$_SESSION['tkip']['dec']['rc4']["key"] = $key;
	$_SESSION['tkip']['decrypt'] = $td;
?>
