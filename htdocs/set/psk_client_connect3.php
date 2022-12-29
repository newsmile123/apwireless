<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_REQUEST['submit4']){
		if ($_SESSION['ap']['enc3'] == 'wpa_802.1x' or $_SESSION['ap']['enc3'] == 'wpa2_802.1x'){
			$_SESSION['keyinput'] = $_POST['connect3'];

			if ($_SESSION['keyinput'] == $_SESSION['radius']['secret3']) {
				$_SESSION['ap']['successxui'] = '1';
			}
			else {
				$_SESSION['ap']['successxui'] = '0';
			}
		}
		else{

			$_SESSION['keyinput'] = $_POST['connect3'];

			if ($_SESSION['keyinput'] == $_SESSION['radius']['secret']) {
				$_SESSION['ap']['successxui'] = '1';
			}
			else {
				$_SESSION['ap']['successxui'] = '0';
			}
	}
	} else{
		if ($_REQUEST['submit3']) {
		unset($_SESSION['ap']['successxui']);
		}
	}
}
header("Location: ../set_client.php");
?>
