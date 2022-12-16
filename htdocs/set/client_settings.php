<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$mac = $_POST['mac'];
$_SESSION['ClientMAC']=$mac;
$ip = $_POST['ip'];
$_SESSION['ClientIP']=$ip;
}
if (isset($_SESSION['ClientMAC']) && ($_SESSION['ClientIP'])){
		$_SESSION['fuller'] = '1';}
		else{
			$_SESSION['fuller'] = '0';}
header("Location: ../set_client.php");
?>
