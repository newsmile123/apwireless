<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset($_POST['key'])){
	$key = $_POST['key'];
	$_SESSION['tkip']['rc4']['key'] = $key;
}}

require_once('class.rc4crypt.php');

	$data = str_replace(" ", "", file_get_contents('/text/plaintext.txt'));
	$key = str_replace(" ", "", $key);
	$td = rc4crypt::encrypt($key, $data, 1);
	$encode_td = bin2hex($td);
	//$dHex = rc4crypt::decrypt($pwd, $eHex, 1);
	
	$_SESSION['wep']['ciphertext'] = $td;
	file_put_contents('text/ciphertext.txt', $td);
	file_put_contents('text/encode_ciphertext.txt', $encode_td);
	echo $encode_td;
	$_SESSION['tkip']['ciphertext'] = $td;
	//$_SESSION['tkip']['icv'] = $_SESSION['tkip']['michael'];
	$_SESSION['tkip']['rc4']["key"] = substr($_SESSION["tkip"]['phase2']["seed"], 6, 32);
	$_SESSION['tkip']['rc4']["iv"] = substr($_SESSION["tkip"]['phase2']["seed"], 0, 6);
file_put_contents('text/ciphertext.txt',$td);
//header("Location: ../encapsulation.php");
?>