<?php
session_start();

/*$_SESSION['aad']['fc'] = $_POST['fc'];
$_SESSION['aad']['a1'] = $_POST['a1'];
$_SESSION['aad']['a2'] = $_POST['a2'];
$_SESSION['aad']['a3'] = $_POST['a3'];
$_SESSION['aad']['a4'] = $_POST['a4'];
$_SESSION['aad']['qos'] = $_POST['qos'];
$_SESSION['aad']['sc'] = $_POST['sc'];
$_SESSION['aad']['success'] = $success_aad = "1";*/
$key = "";
$key .= $_SESSION['aad']['fc'].$_SESSION['aad']['a2'].$_SESSION['aad']['a3'].$_SESSION['aad']['a4'].$_SESSION['aad']['sc'].$_SESSION['aad']['qos'];
/*$key = str_split(str_replace(" ", "" , $key), 1);
for ($i = 0; $i < count($key); $i++){
	$array[$i] = ord($key[$i]);
}
$key = implode("", $array);
$key1 = substr($key, 0, 32);*/
echo str_replace(" ", "" , $key);
//header("Location: construct_aad.php");

?>