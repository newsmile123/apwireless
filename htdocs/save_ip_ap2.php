<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if ($_POST['save_emul3']){
	$_SESSION['ap']['ip2'] = $_POST['ip2'];
	$_SESSION['ap']['mask2'] = $_POST['mask2'];
	header("Location: /network.php");
	}
	
	}
?>
