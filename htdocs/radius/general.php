<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if ($_POST['save_rad']){	
if (isset($_POST['radius_ip']) && ($_POST['radius_mask']) && ($_POST['radius_port'] && ($_POST['radius_pass']))){
		$_SESSION['radius']['ip'] = $_POST['radius_ip'];
		$_SESSION['radius']['mask'] = $_POST['radius_mask'];
		$_SESSION['radius']['port'] = $_POST['radius_port'];
		$_SESSION['radius']['secret'] = $_POST['radius_pass'];
		$_SESSION['radius']['general'] = "1";
}
header("Location: ../set_client.php#tabs-2");
}

if ($_POST['Radius_Emul']){	

		$_SESSION['radius2']['ip'] = $_POST['radius2_ip'];

		$_SESSION['radius2']['port'] = $_POST['radius2_port'];
		$_SESSION['radius2']['secret'] = $_POST['radius2_pass'];
		

header("Location: ../emul/cfg/rad-radius.html");
}
}
?>