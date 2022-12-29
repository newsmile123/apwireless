<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$_SESSION['ap']['SSID3'] = $_POST['ssid3'];

	$_SESSION['radius']['ip3'] = $_POST['radius_ip3'];
	$_SESSION['radius']['secret'] = $_POST['passwordpsk'];
	$_SESSION['ap']['enc3'] = $_POST['enc3'];

        $_SESSION['radius']['secret3'] = $_POST['radius_secret3'];
        $_SESSION['radius']['port3'] = $_POST['radius_port3'];
	if ($_POST['save_emul_elastix']){
	
	
		$_SESSION['ap']['enc3'] = $_POST['enc3'];

	
		$_SESSION['ap']['SSID3'] = $_POST['ssid3'];
	
		$_SESSION['radius']['ip3'] = $_POST['radius_ip3'];
		$_SESSION['radius']['secret3'] = $_POST['radius_secret3'];
		$_SESSION['radius']['secret'] = $_POST['passwordpsk'];
	
		$_SESSION['ap']['mask3'] = $_POST['mask3'];
	

	
		header("Location: index_1.php");
		}
	
	}
?>
