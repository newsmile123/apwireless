<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_POST['wirB']){
	$_SESSION['ap']['mode'] = $_POST['mode'];
	
	$_SESSION['ap']['mac'] = $_POST['mac'];
	$_SESSION['ap']['SSID'] = $_POST['ssid'];
	$_SESSION['ap']['switcher'] = $_POST['switcher'];
	$_SESSION['ap']['channel'] = $_POST['channel'];
	header("Location: ../emul/cfg/if-wirB-11ag.html");
	}
	if ($_POST['wds']){
	$_SESSION['wds_mac1'] = $_POST['wds_mac1'];
	$_SESSION['wds_mac2'] = $_POST['wds_mac2'];
	$_SESSION['wds_mac3'] = $_POST['wds_mac3'];
	
	
	header("Location: ../emul/cfg/addedit/wds-edit.html");
	}
		
	if ($_POST['send']){
	$_SESSION['ap']['ip'] = $_POST['ip'];
	header("Location: ../emul/cfg/net-ipconf.html");
	}
	
	if ($_POST['secB']){
	$_SESSION['ap']['profile'] = $_POST['profile'];
	$_SESSION['ap']['upd'] = $_POST['upd'];
	$i = $_SESSION['ap']['profile'];
	$_SESSION['ap']['enc'] = $_SESSION['sec'][$i]['name'];
	$_SESSION['ap']['key'] = $_SESSION['sec'][$i]['key'];
	$_SESSION['ap']['cipher'] = $_SESSION['sec'][$i]['cipher'];
	header("Location: ../emul/cfg/sec-gen34-b.html");
	}
	if ($_POST['save_ap']){
	$_SESSION['ap']['ip'] = $_POST['ip'];
	$_SESSION['ap']['mode'] = $_POST['mode'];
	$_SESSION['ap']['mac'] = $_POST['mac'];
	$_SESSION['ap']['SSID'] = $_POST['ssid'];
	$_SESSION['ap']['channel'] = $_POST['channel'];
	$_SESSION['ap']['switcher'] = $_POST['switcher'];
	$_SESSION['ap']['bridge_on']=$_POST['bridge_on'];
	$_SESSION['ap']['upd'] = $_POST['upd'];
	$_SESSION['ap']['enc'] = $_POST['enc'];
	if ($_SESSION['ap']['enc'] == 'wpa_802.1x' or $_SESSION['ap']['enc'] == 'wpa2_802.1x' or $_SESSION['ap']['enc'] == 'none'){
		$_SESSION['ap']['key'] = "";
		$_SESSION['ap']['cipher'] = "";
	}
		else{;
			$_SESSION['ap']['key'] = $_POST['key'];
		}
	if (!isset($_SESSION['count'])){
		$_SESSION['count'] = 1;
		$i = 1;
		$_SESSION['ap']['profile'] = $i;
	}
	else{
		$i = $_SESSION['ap']['profile'];
	}
	$_SESSION['sec'][$i]['name'] = $_SESSION['ap']['enc'];
	$_SESSION['sec'][$i]['key'] = $_SESSION['ap']['key'] ;
	$_SESSION['sec'][$i]['cipher'] = $_SESSION['ap']['cipher'];
	header("Location: ../set_ap.php");
	}
	}
?>
