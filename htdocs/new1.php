<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if ($_POST['save_ap']){
	$_SESSION['ap1']['ip'] = $_POST['ip'];
	$_SESSION['ap2']['ip2'] = $_POST['ip2'];
	$_SESSION['ap1']['mode'] = $_POST['mode'];
	$_SESSION['ap1']['mac'] = $_POST['mac'];
	$_SESSION['ap1']['SSID'] = $_POST['ssid'];
	$_SESSION['ap1']['channel'] = $_POST['channel'];
	$_SESSION['ap1']['switcher'] = $_POST['switcher'];
	$_SESSION['ap1']['upd'] = $_POST['upd'];
	$_SESSION['ap1']['enc'] = $_POST['enc'];
	header("Location: mainone.php");
	}
	if($_POST['save_ap2']) {$_SESSION['ap2']['ip2'] = $_POST['ip2'];
		header("Location: mainone.php");
	}
	}
?>
