<?php
session_start();

$_SESSION['aad']['dec']['fc'] = $_POST['fc'];
$_SESSION['aad']['dec']['a1'] = $_POST['a1'];
$_SESSION['aad']['dec']['a2'] = $_POST['a2'];
$_SESSION['aad']['dec']['a3'] = $_POST['a3'];
$_SESSION['aad']['dec']['a4'] = $_POST['a4'];
$_SESSION['aad']['dec']['qos'] = $_POST['qos'];
$_SESSION['aad']['dec']['sc'] = $_POST['sc'];
$_SESSION['aad']['dec']['success'] = $success_aad = "1";
$key = "";
$key .= $_SESSION['aad']['dec']['fc'].$_SESSION['aad']['dec']['a2'].$_SESSION['aad']['dec']['a3'].$_SESSION['aad']['dec']['a4'].$_SESSION['aad']['dec']['sc'].$_SESSION['aad']['dec']['qos'];
/*$key = str_split(str_replace(" ", "" , $key), 1);
for ($i = 0; $i < count($key); $i++){
	$array[$i] = ord($key[$i]);
}
$key = implode("", $array);
$key1 = substr($key, 0, 32);*/
$_SESSION['ccmp']['dec']['key'] = str_replace(" ", "" , $key);
echo str_replace(" ", "" , $key);
//header("Location: construct_aad.php");

?>