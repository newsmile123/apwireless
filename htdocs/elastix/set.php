<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	

	if ($_POST['save_emul_elastix']){
    

		// $_SESSION['ap']['mode2'] = $_POST['mode2'];
		$_SESSION['ap']['mac3'] = $_POST['mac3'];
		$_SESSION['ap']['SSID3'] = $_POST['ssid3'];
		$_SESSION['ap']['channel3'] = $_POST['channel3'];
        $_SESSION['radius3']['ip'] = $_POST['ip'];
        $_SESSION['ap']['ip3'] = $_POST['ip3'];
	$_SESSION['ap']['mask3'] = $_POST['mask3'];
		// $_SESSION['ap']['switcher2'] = $_POST['switcher2'];
	
		$_SESSION['ap']['upd2'] = $_POST['upd2'];
		$_SESSION['ap']['enc2'] = $_POST['enc2'];
		if ($_SESSION['ap']['enc2'] == 'wpa_802.1x' or $_SESSION['ap']['enc2'] == 'wpa2_802.1x' or $_SESSION['ap']['enc2'] == 'none'){
			$_SESSION['ap']['key2'] = "";
			$_SESSION['ap']['cip2her2'] = "";
		}
			else{;
				$_SESSION['ap']['key2'] = $_POST['key2'];
			}
		if (!isset($_SESSION['count2'])){
			$_SESSION['count2'] = 2;
			$i = 2;
			$_SESSION['ap']['profile2'] = $i;
		}
		else{
			$i = $_SESSION['ap']['profile2'];
		}
		$_SESSION['sec2'][$i]['name2'] = $_SESSION['ap']['enc2'];
		$_SESSION['sec2'][$i]['key2'] = $_SESSION['ap']['key2'] ;
		$_SESSION['sec2'][$i]['cip2her2'] = $_SESSION['ap']['cip2her2'];
		// header("Location: ./index.php");
		}
		if ($_POST['save_emul3']){
		$_SESSION['ap']['ip2'] = $_POST['ip2'];
		$_SESSION['ap']['mask2'] = $_POST['mask2'];
		header("Location: /network.php");
		}
	}
?>
