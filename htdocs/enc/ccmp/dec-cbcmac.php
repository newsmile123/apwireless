<?php
session_start();
if (isset($_POST['cipherkey'])){
	$key = str_replace(" ", "", $_POST['cipherkey']);
}
$plaintext = file_get_contents('text/plaintext.txt');
$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_CBC, $iv);
file_put_contents('text/cbcmac.txt', substr(bin2hex($ciphertext), 0, 16));

	$ciphertext_dec = file_get_contents('text/decrypt.txt');
    $iv_dec = substr($ciphertext_dec, 0, $iv_size);
    $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
echo substr(bin2hex($plaintext_dec), 0, 16);
//header("Location: tkipenc.php");
?>
