<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$_SESSION['ap']['vid'] = $_POST['vid'];
	//if ($_POST['ssid'] = preg_match("/^[a-zA-Z0-9]/")){
			$_SESSION['ap']['SSID'] = $_POST['ssid'];
		//}
		//else{
		//	$_SESSION['ap']['error']['ssid'] = '1';
		//}
		//if ($_POST['mac'] = preg_match("/\b[\d|a-f]{2}\:[\d|a-f]{2}\:[\d|a-f]{2}\:[\d|a-f]{2}\:[\d|a-f]{2}\:[\d|a-f]{2}\b/")){
			$_SESSION['ap']['mac'] = $_POST['mac'];
		//}
		//else{
		//	$_SESSION['ap']['error']['mac'] = '1';
		//}
	$_SESSION['ap']['qos'] = $_POST['qos'];
	$_SESSION['ap']['profile'] = $_POST['profile'];
	$_SESSION['ap']['upd'] = $_POST['upd'];
	$_SESSION['ap']['switcher'] = $_POST['switcher'];
	}
	
	$i = $_SESSION['ap']['profile'];
	$_SESSION['ap']['enc'] = $_SESSION['sec'][$i]['name'];
	$_SESSION['ap']['key'] = $_SESSION['sec'][$i]['key'];
	$_SESSION['ap']['cipher'] = $_SESSION['sec'][$i]['cipher'];
	/*if (isset($_SESSION['ap']['mode']) && ($_SESSION['ap']['width']) && ($_SESSION['ap']['SSID']) && ($_SESSION['ap']['mac']) && ($_SESSION['ap']['enc']) && ($_SESSION['ap']['key']) && ($_SESSION['ap']['channel'])){
		$_SESSION['ap']['full'] = '1';}
		else{
			$_SESSION['ap']['full'] = '0';}
	if ($_REQUEST['saveAP']){
header("Location: ../set_ap.php");}
else {*/
header("Location: ../emul/cfg/sec-gen34-b.html");
?>
