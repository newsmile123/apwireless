<?php
session_start();
function rc4($key, $str) {
	$s = array();
	for ($i = 0; $i < 256; $i++) {
		$s[$i] = $i;
	}
	$j = 0;
	for ($i = 0; $i < 256; $i++) {
		$j = ($j + $s[$i] + ord($key[$i % strlen($key)])) % 256;
		$x = $s[$i];
		$s[$i] = $s[$j];
		$s[$j] = $x;
	}
	$i = 0;
	$j = 0;
	$res = '';
	for ($y = 0; $y < strlen($str); $y++) {
		$i = ($i + 1) % 256;
		$j = ($j + $s[$i]) % 256;
		$x = $s[$i];
		$s[$i] = $s[$j];
		$s[$j] = $x;
		$res .= $str[$y] ^ chr($s[($s[$i] + $s[$j]) % 256]);
	}
	return $res;
}
if (isset($_POST['dec_iv']) && isset($_POST['dec_key'])){
	$iv = $_POST['dec_iv'];
	$key = $_POST['dec_key'];
}
$iv = $_SESSION['demo']['2']['tkip']['wep']["iv"];
$key = $_SESSION['demo']['2']['tkip']['wep']["key"];
$plaintext = file_get_contents('text/ciphertext.txt');
$td = mcrypt_encrypt(MCRYPT_ARCFOUR, $key, $plaintext, MCRYPT_MODE_STREAM, $iv);
$_SESSION['demo']['tkip']['decrypt'] = $td;
file_put_contents('../text/encrypt.txt',$td);
header("Location: ../decapsulation.php");
?>
