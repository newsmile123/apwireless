<?php
session_start();
$number = $_POST['number'];
$str = '';
if ($number == '2'){
$str.="0".$_SESSION['ptk2'].$_SESSION['anonce'].$_SESSION['snonce'];
}
if ($number == '3'){
$str.="0".$_SESSION['ptk3'].$_SESSION['anonce'].$_SESSION['snonce'];
}
if ($number == '4'){
$str.="0".$_SESSION['ptk2'].$_SESSION['ptk3'];
}
$mic = hash_hmac('sha1', $str, $_SESSION['kck']);
$mic = substr($mic, 0, 32);
echo $mic;
$_SESSION['mic'][$number] = $mic;
//header("Location: 2psk.php");
?>