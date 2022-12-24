<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_REQUEST['submit']){
		if ($_SESSION['ap']['enc'] == 'wpa_802.1x' or $_SESSION['ap']['enc'] == 'wpa2_802.1x'){
			if (isset($_SESSION['secret_ok']) && ($_SESSION['secret_ok'] == "1")){
					$_SESSION['success'] = '1';
				
			}
			
			else {
			$_SESSION['success'] = '0';
		}
		}
		else{ if ($_REQUEST['submi3t']){
			if ($_SESSION['ap']['enc3'] == 'wpa_802.1x' or $_SESSION['ap']['enc3'] == 'wpa2_802.1x'){
				if (isset($_SESSION['secret_ok']) && ($_SESSION['secret_ok'] == "1")){
						$_SESSION['success'] = '1';
					
				}
				
				else {
				$_SESSION['success'] = '0';
			}
			}
			else{
		$_SESSION['connect'] = $_POST['connect'];
		if ($_SESSION['connect'] == $_SESSION['ap']['key']) {
				$_SESSION['success'] = '1';
			}
			else {
				$_SESSION['success'] = '0';
			}
		}
		}
		else{
			if ($_REQUEST['submit1']) {
			unset($_SESSION['success']);
			}
		}
	$_SESSION['connect'] = $_POST['connect'];
	if ($_SESSION['connect'] == $_SESSION['ap']['key']) {
			$_SESSION['success'] = '1';
		}
		else {
			$_SESSION['success'] = '0';
		}
	}
	}
	else{
		if ($_REQUEST['submit1']) {
		unset($_SESSION['success']);
		}
	}
}
header("Location: ../set_client.php");
?>
