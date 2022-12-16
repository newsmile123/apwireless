<?php
session_start();
$pmk = $_SESSION['demo']['pmk'];
$mac_ap = $_SESSION['demo']["ap"]["mac"];
$mac_sta = $_SESSION['demo']['client']["mac"];
$anonce = $_SESSION['demo']['anonce'];
$snonce = $_SESSION['demo']['snonce'];
$str = "Pairwise key expansion";
$str1 = base_convert($mac_ap, 16, 10);
$str2 = base_convert($mac_sta, 16, 10);
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
$_SESSION['demo']['ptk1'] = $ptk;
echo $_SESSION['demo']['ptk1'];
?>