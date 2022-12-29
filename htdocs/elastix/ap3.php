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
	
	
		
		if ($_SESSION['ap']['enc2'] == 'wpa_802.1x' or $_SESSION['ap']['enc2'] == 'wpa2_802.1x' or $_SESSION['ap']['enc2'] == 'none'){
			$_SESSION['ap']['key2'] = "";
			$_SESSION['ap']['cip2her2'] = "";
		}
			else{;
				$_SESSION['ap']['key2'] = $_POST['key2'];
			}
		if (!isset($_SESSION['count2'])){
			$_SESSION['count2'] = 2;
			$i = 2;
			$_SESSION['ap']['profile2'] = $i;
		}
		else{
			$i = $_SESSION['ap']['profile2'];
		}
		$_SESSION['sec2'][$i]['name2'] = $_SESSION['ap']['enc2'];
		$_SESSION['sec2'][$i]['key2'] = $_SESSION['ap']['key2'] ;
		$_SESSION['sec2'][$i]['cip2her2'] = $_SESSION['ap']['cip2her2'];
	
		header("Location: index_1.php");
		}
	
	}
?>
