<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_REQUEST['submit2']){
		if ($_SESSION['ap']['enc3'] == 'wpa_802.1x' or $_SESSION['ap']['enc3'] == 'wpa2_802.1x'){
		}
		else{
	$_SESSION['connect3'] = $_POST['connect3'];
	if ($_SESSION['connect3'] == $_SESSION['ap']['key3']) {
			$_SESSION['success3'] = '1';
		}
		else {
			$_SESSION['success3'] = '0';
		}
	}
	}
	else{
		if ($_REQUEST['submit3']) {
		unset($_SESSION['success3']);
		}
	}
}
header("Location: ../set_client.php");
?>
