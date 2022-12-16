<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$_SESSION['check'] = $_POST['check'];
		
		switch($_SESSION['check']){
			
			case "none":
			$arr['name'] = $_SESSION['check'];
			$arr['auth'] = "none";
			$arr['cipher'] = "none";
			break;
			
			case "wep":
			if (!empty($_POST['wep_key'])){
			$arr['name'] = $_SESSION['check'];
			$arr['auth'] = "none";
			$arr['cipher'] = "wep";
			$arr['key'] = $_POST['wep_key'];}
			else{
				$_SESSION['error_key'] = "1";
				}
			break;
			
			case "802.1x":
			$arr['name'] = $_SESSION['check'];
			$arr['auth'] = "802.1x";
			$arr['cipher'] = "wep";
			$arr['key'] = $_POST['wep_key'];
			$arr['key_len'] = $_POST['key_len'];
			break;
			
			case "wpa_psk":
			if (!empty($_POST['wpa_key'])){
			$arr['name'] = $_SESSION['check'];
			$arr['auth'] = "PSK";
			$arr['cipher'] = "TKIP";
			$arr['key'] = $_POST['wpa_key'];}
			else{
				$_SESSION['error_key'] = "1";
				}
			break;
			
			case "wpa":
			$arr['name'] = $_SESSION['check'];
			$arr['auth'] = "802.1x";
			$arr['cipher'] = "TKIP";
			break;
			
			case "wpa2":
			$arr['name'] = $_SESSION['check'];
			$arr['auth'] = "802.1x";
			$arr['cipher'] = "AES";
			break;
			
			case "wpa2_psk":
			if (!empty($_POST['wpa2_key'])){
			$arr['name'] = $_SESSION['check'];
			$arr['auth'] = "PSK";
			$arr['cipher'] = "AES";
			$arr['key'] = $_POST['wpa2_key'];}
			else{
				$_SESSION['error_key'] = "1";
				}
			break;
		}
		
		$i = $_SESSION['value'];
		
		if (isset($_SESSION['error_key']) &&  ($_SESSION['error_key']= "1")){
			header("Location: ../cfg/addedit/secProfile-edit.html");
		}
		
		else{
		$_SESSION['sec'][$i] = $arr;
			header("Location: ../cfg/sec-Profiles.html");
			}
}
?>
