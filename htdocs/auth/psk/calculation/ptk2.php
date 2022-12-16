<?php
session_start();
$pmk = $_POST['pmk'];
$mac_ap = $_POST['mac_ap'];;
$mac_client = $_POST['mac_client'];;
$anonce = $_POST['anonce'];;
$snonce = $_POST['snonce'];;
$str = "Pairwise key expansion";
$str1 = base_convert($mac_ap, 16, 10);
$str2 = base_convert($mac_client, 16, 10);
$str3 = base_convert($anonce, 16, 10);
$str4 = base_convert($snonce, 16, 10);
$min_mac = base_convert(min($str1, $str2), 10, 16);
$max_mac = base_convert(max($str1, $str2), 10, 16);
$min_nonce = base_convert(min($str3, $str4), 10, 16);
$max_nonce = base_convert(max($str3, $str4), 10, 16);
$i = 0;
$ptk = "";
		for ($i = 0; $i < (512+159)/160; $i++){
			$ptk = $ptk.hash_hmac('sha1', $str."0".$min_mac.$max_mac.$min_nonce.$max_nonce.$i, $pmk);
		}
$ptk = substr($ptk, 0, 128);
echo $ptk;
$_SESSION['ptk2'] = $ptk;
$kck = substr($ptk, 0, 32);
$_SESSION['kck'] = $kck;
$kek = substr($ptk, 32, 32);
$_SESSION['kek'] = $kek;
$tk = substr($ptk, 64, 32);
$_SESSION['tk'] = $tk;
$tmk = substr($ptk, 64, 32);
$_SESSION['tmk'] = $tmk;
//header("Location: ../calcs/transient1.php");
?>