<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/rc4.js"></script>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/components/core-min.js"></script>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/components/enc-utf16-min.js"></script>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/components/enc-base64-min.js"></script>
<script>
function crypt(){
	var plaintext = "aaaa0300000008004500004e661a00008011be640a0001220affffff00890089003a000080a601100001000000000000204543454a454845434643455046454549454646434341434143414341434141410000200001";
	var key = "fb029e3031323334";
    var encrypted = CryptoJS.RC4.encrypt(plaintext, key);
    var decrypted = CryptoJS.RC4.decrypt(encrypted, key);
	var hex = CryptoJS.enc.Base64.parse(encrypted);
	alert(words);
}
</script>
<body>
<button id="input-key" title="Отправить" onClick="crypt()">Отправить</button>