<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_REQUEST['submit2']){
		if ($_SESSION['ap']['enc2'] == 'wpa_802.1x' or $_SESSION['ap']['enc2'] == 'wpa2_802.1x'){
		}
		else{
	$_SESSION['connect2'] = $_POST['connect2'];
	if ($_SESSION['connect2'] == $_SESSION['ap']['key2']) {
			$_SESSION['success2'] = '1';
		}
		else {
			$_SESSION['success2'] = '0';
		}
	}
	}
	else{
		if ($_REQUEST['submit3']) {
		unset($_SESSION['success2']);
		}
	}
}
header("Location: ../set_client.php");
?>
