<?php
session_start();
/*if (isset($_POST['ph1_tk']) && isset($_POST['ph1_ta']) && isset($_POST['ph1_tsc32'])){
	$tk = str_replace(" ", "", $_POST['ph1_tk']);
	$ta = str_replace(" ", "", $_POST['ph1_ta']);
	$tsc32 = str_replace(" ", "", $_POST['ph1_tsc32']);
}*/
$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
$key_size =  strlen($key);
echo "Key size: " . $key_size . "\n";
$plaintext = file_get_contents('text/plaintext.txt');
$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_CBC, $iv);
$ciphertext = $iv . $ciphertext;
//$ciphertext_base64 = base64_encode($ciphertext);
file_put_contents('text/ciphertext.txt', $ciphertext);
//$ciphertext_dec = base64_decode($ciphertext_base64);
	$ciphertext_dec = file_get_contents('text/ciphertext.txt');
    $iv_dec = substr($ciphertext_dec, 0, $iv_size);
    $ciphertext_dec = substr($ciphertext_dec, $iv_size);
    $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
    file_put_contents('text/decrypt.txt', $plaintext_dec);
//header("Location: tkipenc.php");
?>
