<?php
session_start();
if (isset($_POST['cipherkey'])){
	$key = str_replace(" ", "", $_POST['cipherkey']);
}
$_SESSION['ccmp']['dec']['key'] = $key;
$key_size =  strlen($key);
$plaintext = file_get_contents('text/plaintext.txt');
$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_ECB, $iv);
//$ciphertext_base64 = base64_encode($ciphertext);
file_put_contents('text/ciphertext.txt', $ciphertext);
file_put_contents('text/ciphertext-encode.txt', bin2hex($ciphertext));

//$ciphertext_dec = base64_decode($ciphertext_base64);
	$ciphertext_dec = file_get_contents('text/ciphertext.txt');
    $iv_dec = substr($ciphertext_dec, 0, $iv_size);
    $decrypt = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_ECB, $iv_dec);
    file_put_contents('text/decrypt.txt',  $decrypt);
echo $decrypt;
//header("Location: tkipenc.php");
?>