<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_POST['save_emul3']){
	$_SESSION['ap']['ip3'] = $_POST['ip3'];
	$_SESSION['ap']['mode3'] = $_POST['mode3'];
	$_SESSION['ap']['mac3'] = $_POST['mac3'];
	$_SESSION['ap']['SSID3'] = $_POST['ssid3'];
	$_SESSION['ap']['channel3'] = $_POST['channel3'];
	$_SESSION['ap']['switcher3'] = $_POST['switcher3'];
	$_SESSION['ap']['bridge_on3']=$_POST['bridge_on3'];
	$_SESSION['ap']['upd3'] = $_POST['upd3'];
	$_SESSION['ap']['enc3'] = $_POST['enc3'];
	$_SESSION['radius']['ip'] = $_POST['radius_ip'];
	if ($_SESSION['ap']['enc3'] == 'wpa_802.1x' or $_SESSION['ap']['enc3'] == 'wpa2_802.1x' or $_SESSION['ap']['enc3'] == 'none'){
		$_SESSION['ap']['key3'] = "";
		$_SESSION['ap']['cip2her3'] = "";
	}
		else{;
			$_SESSION['ap']['key3'] = $_POST['key3'];
		}
	if (!isset($_SESSION['count3'])){
		$_SESSION['count3'] = 2;
		$i = 2;
		$_SESSION['ap']['profile3'] = $i;
	}
	else{
		$i = $_SESSION['ap']['profile3'];
	}
	$_SESSION['sec3'][$i]['name3'] = $_SESSION['ap']['enc3'];
	$_SESSION['sec3'][$i]['key3'] = $_SESSION['ap']['key3'] ;
	$_SESSION['sec3'][$i]['cip2her3'] = $_SESSION['ap']['cip2her3'];
	header("Location: /link.php");
	}
	
	if ($_POST['save_ap3']){
	$_SESSION['ap']['ip3'] = $_POST['ip3'];
	$_SESSION['ap']['mode3'] = $_POST['mode3'];
	$_SESSION['ap']['mac3'] = $_POST['mac3'];
	$_SESSION['ap']['SSID3'] = $_POST['ssid3'];
	$_SESSION['ap']['channel3'] = $_POST['channel3'];
	$_SESSION['ap']['switcher3'] = $_POST['switcher3'];
	$_SESSION['ap']['bridge_on3']=$_POST['bridge_on3'];
	$_SESSION['ap']['upd3'] = $_POST['upd3'];
	$_SESSION['ap']['enc3'] = $_POST['enc3'];
	$_SESSION['radius']['ip'] = $_POST['radius_ip'];

	$_SESSION['radius']['secret'] = $_POST['radius_secret'];

	$_SESSION['radius']['port'] = $_POST['radius_port'];

	if ($_SESSION['ap']['enc3'] == 'wpa_802.1x' or $_SESSION['ap']['enc3'] == 'wpa2_802.1x' or $_SESSION['ap']['enc3'] == 'none'){
		$_SESSION['ap']['key3'] = "";
		$_SESSION['ap']['cip2her3'] = "";
	}
		else{;
			$_SESSION['ap']['key3'] = $_POST['key3'];
		}
	if (!isset($_SESSION['count3'])){
		$_SESSION['count3'] = 2;
		$i = 2;
		$_SESSION['ap']['profile3'] = $i;
	}
	else{
		$i = $_SESSION['ap']['profile3'];
	}
	$_SESSION['sec3'][$i]['name3'] = $_SESSION['ap']['enc3'];
	$_SESSION['sec3'][$i]['key3'] = $_SESSION['ap']['key3'] ;
	$_SESSION['sec3'][$i]['cip2her3'] = $_SESSION['ap']['cip2her3'];
	header("Location: ../set_ap.php#tabs-2");
	}
	}
?>
