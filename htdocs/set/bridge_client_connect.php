<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['output4'])){
		if ($_POST['output4'] == 'bridge_ok1'){
			
			$_SESSION['bridge_not_ip'] = "0";
	
			$_SESSION['bridge_ok_ip'] = "1";
			header("Location: ../set_client.php");
		}
		if ($_POST['output4'] == 'bridge_not1'){
				$_SESSION['bridge_ok_ip'] = "0";
			
			$_SESSION['bridge_not_ip'] = "1";
			header("Location: ../set_client.php");
		}
	
	}
}
?>
