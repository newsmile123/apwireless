<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$ClientMAC = $_POST['ClientMAC'];
$_SESSION['ClientMAC']=$ClientMAC;
$ClientIP = $_POST['ClientIP'];
$_SESSION['ClientIP']=$ClientIP;
}
if (isset($_SESSION['ClientMAC']) && ($_SESSION['ClientIP'])){
		$_SESSION['fuller'] = '1';}
		else{
			$_SESSION['fuller'] = '0';}
header("Location: ../set_client.php");
?>
