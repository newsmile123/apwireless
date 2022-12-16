<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['output'])){
		if ($_POST['output'] == 'bridge_ok1'){
			unset($_SESSION['bridge_not_ip']);
	
			$_SESSION['bridge_ok_ip'] = '1';
			header("Location: ../set_client.php");
		}
		if ($_POST['output'] == 'bridge_not1'){
			unset($_SESSION['bridge_ok_ip]']);
			
			$_SESSION['bridge_not_ip'] = '1';
			header("Location: ../set_client.php");
		}
	
	}
}
?>
