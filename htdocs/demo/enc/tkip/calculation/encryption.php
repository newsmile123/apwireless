<?php
session_start();
function back($str){
	$arr = str_split($str, 1);
	for ($i = 0; $i < count($arr); $i++){
	$ch[$i] = dechex(ord($arr[$i]));
	}
	$newhex = implode("", $ch);
	return $newhex;
}
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
$iv = $_SESSION['demo']['tkip']['wep']["iv"];
$key = $_SESSION['demo']['tkip']['wep']["key"];
$plaintext = file_get_contents('text/plaintext.txt');
$td = str_split(substr(back(rc4($key, $plaintext)), 0, strlen($plaintext)/1.5), 2);
$td = implode(" ", $td);
$_SESSION['demo']['tkip']['ciphertext'] = $td;
$_SESSION['demo']['tkip']['icv'] = $_SESSION['demo']['tkip']['michael'];
file_put_contents('text/ciphertext.txt',$td);
header("Location: ../encapsulation.php");
?>