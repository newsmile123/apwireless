<?php
session_start();
$mac = $_SESSION['demo']["ap"]["mac"];
$rand = substr(md5(rand()), 0, 32);
$str = "Init Counter";
for ($i = 0; $i < (256+159)/160; $i++){
$str.="0".$mac.$i;
$mic = "";
$mic .= hash_hmac('sha256', $str, $rand);
}
$mic = substr($mic, 0, 64);
$_SESSION['demo']['mic2'] = $mic;
echo $_SESSION['demo']['mic2'];
?>