<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$arr['mode'] = $_POST['mode'];
	$arr['width'] = $_POST['width'];
	$arr['SSID'] = $_POST['SSID'];
	$arr['mac'] = $_POST['MAC_AP'];
	$arr['enc'] = $_POST['enc'];
	$arr['key'] = $_POST['Key_AP'];
	$arr['upd'] = $_POST['upd'];
	$arr['channel'] = $_POST['channel'];
	$arr['switcher'] = $_POST['switcher'];
	$_SESSION['ap'] = $arr;
	}
	if (isset($_SESSION['ap']['mode']) && ($_SESSION['ap']['width']) && ($_SESSION['ap']['SSID']) && ($_SESSION['ap']['mac']) && ($_SESSION['ap']['enc']) && ($_SESSION['ap']['key']) && ($_SESSION['ap']['channel'])){
		$_SESSION['ap']['full'] = '1';}
		else{
			$_SESSION['ap']['full'] = '0';}
	if ($_REQUEST['saveAP']){
header("Location: ../set_ap.php");}
else {
	header("Location: http://localhost/site/emul/cfg/if-wirB-11ag.html");}
	
?>
