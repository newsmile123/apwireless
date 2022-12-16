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
function toUtf($str){
	$arr = str_split($str, 4);
	for ($i = 0; $i < count($arr); $i++){
	$ch[$i] = dechex(ord($arr[$i]));
	}
	$newhex = implode("", $ch);
	return $newhex;
}
$key = "fb029e3031323334";
$plaintext = file_get_contents('../text/plaintext.txt');
$iv = "fb029e3031323334";
echo $plaintext. "    ";
$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_CBC, $iv);
echo $ciphertext. "    ";
$ciphertext = back($ciphertext);
echo substr($ciphertext, 0, strlen($plaintext));
//echo substr($ciphertext, 0, strlen($plaintext)/2);
//$ciphertext = $iv . $ciphertext;
file_put_contents('../text/ciphertext.txt', $ciphertext);
//$ciphertext_dec = base64_decode($ciphertext_base64);
	$ciphertext_dec = file_get_contents('../text/ciphertext.txt');
    $iv_dec = "fb029e3031323334";
    $ciphertext_dec = substr($ciphertext_dec, 16);
    $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
    file_put_contents('../text/decrypt.txt', $plaintext_dec);
	
//header("Location: tkipenc.php");
?>